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
    
    public function create($id){
        return view ('deposit.makeAccount')
        ->with('customer',Customer::find($id))
        ->with('types',TypeDisposit::all())
        ->with('employees',Employee::all());
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
        $idAccount = DB::table('accounts')->max('id');
        $account = Account::find($idAccount);
        if($account->generate==1){
            return back()->with('warning','un');
        }
        $luckyCodeAmount = ROUND($account->amount / $account->typeDisposits->money)* $account->typeDisposits->ticket;
        $account->generate = 1;
        $account->save();
        for($i=0;$i<$luckyCodeAmount;$i++){
        $idLuckyCode = DB::table('lucky_codes')->max('id')+1000001;
           LuckyCode::create([
            'idCode' => $idLuckyCode,
            'account_id' => $account->id
           ]);
        }
        
        return redirect()->route('lucky.index');
    }
}
