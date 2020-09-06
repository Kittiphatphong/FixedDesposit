<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Account;
use App\TypeDisposit;
use App\Employee;
use App\LuckyCode;
use Auth;
use DB;
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('deposit.account')->with('accounts',Account::all());
    }

    public function create($id){
        $account = new Account();
        return view ('deposit.makeAccount')
        ->with('customer',Customer::find($id))
        ->with('types',TypeDisposit::all())
        ->with('employees',Employee::all())
        ->with('account',$account);
    }
    public function edit($id){
        $account = Account::find($id);
        return view ('deposit.makeAccount')
        ->with('customer',Customer::find($id))
        ->with('types',TypeDisposit::all())
        ->with('employees',Employee::all())
        ->with('account',$account)->with('check','check');
    }
    public function store(Request $request,$id){
        $this->validate($request,[
            'idAccount' => 'required|unique:accounts|min:9|max:9',
            'start' => 'required',
            'end' => 'required',
            'interest' => 'required|numeric',
            'amount' => 'required|numeric',
            'amountWord' => 'required'  
        ]);
        //! Create Account
        Account::create([
            'idAccount' => $request->get('idAccount'),
            'start' => $request->get('start'),
            'end' => $request->get('end'),
            'interest' => $request->get('interest'),
            'amount' => $request->get('amount'),
            'amountWord' => $request->get('amountWord'),
            'receiveInterest' => $request->get('receiveInterest'),
            'user_id' => Auth::user()->id,
            'customer_id'=> $id,
            'typeDisposit_id'=>$request->get('typeDisposit_id'),
            'employee_id' => $request->get('employee_id')
        ]);
        //! generate Id
        $idAccount = DB::table('accounts')->max('id');
        $account = Account::find($idAccount);
        //! validation account is generated 
        if($account->generate==1){
            return back()->with('warning','This account is generated');
        }
        
        $luckyCodeAmount = ROUND($account->amount / $account->typeDisposits->money - 0.5)* $account->typeDisposits->ticket;
        //! LOOP LUCKY CODE 
        for($i=0;$i<$luckyCodeAmount;$i++){
           LuckyCode::create([
            'account_id' => $account->id
           ]);
           $idLuckyCode = DB::table('lucky_codes')->max('id');
           $LuckyCode = LuckyCode::find($idLuckyCode);
           $LuckyCode->idCode = 1000000 + $idLuckyCode;
           $LuckyCode->save();
        }

        $account->generate = 1;
        $account->save();
        return redirect()->route('lucky.show');
    }
    public function destroy($id){

    }
}
