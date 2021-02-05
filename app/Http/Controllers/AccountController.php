<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Account;
use App\TypeDisposit;
use App\Employee;
use App\LuckyCode;
use App\WinRandom;
use Auth;
use DB;
use Carbon\Carbon;
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
    public function update(Request $request, $id){
        $this->validate($request,[
            'idAccount' => 'required|min:9|max:9',
            'interest' => 'required|numeric',
            'amount' => 'required',
            'amountWord' => 'required',

        ]);
        $account = Account::find($id);
        $amount=round(str_replace(',','',$request->get('amount')));
        if($amount<999){
            return back()->with('warning','jay');
        }
        $account->update([
            'idAccount' => $request->get('idAccount'),
            'interest' => $request->get('interest'),
            'amount' => $amount,
            'amountWord' => $request->get('amountWord'),
            'receiveInterest' => $request->get('receiveInterest'),
            'user_id' => Auth::user()->id,
            'employee_id' => $request->get('employee_id')
        ]);
        return redirect()->route('account.index')->with('success','ທ່າ​ນ​ໄດ້​ແກ້​ໄຂ​ຂໍ້​ມູນ​ບັນ​ຊີ​ລູກ​ຄ້າ​ສຳ​ເລັດ');

    }
    public function store(Request $request,$id){
        $this->validate($request,[
            'idAccount' => 'required|unique:accounts|min:9|max:9',
            'start' => 'required|date',
            'interest' => 'required|numeric',
            'amount' => 'required',
            'amountWord' => 'required'
        ]);
        // //! Create Account
        $start = Carbon::create($request->get('start'));
        $type = TypeDisposit::find($request->get('typeDisposit_id'));
        if($type->yearOrMonth =="year"){
        $end =  $start->addYear($type->period)->toDateString();
        }else{
        $end =  $start->addMonth($type->period)->toDateString();
        }
        $amount=round(str_replace(',','',$request->get('amount')));
        if($amount<999){
            return back()->with('warning','jay');
        }
        Account::create([
            'idAccount' => $request->get('idAccount'),
            'start' => $request->get('start'),
            'end' => $end,
            'interest' => $request->get('interest'),
            'amount' => $amount,
            'amountWord' => $request->get('amountWord'),
            'receiveInterest' => $request->get('receiveInterest'),
            'user_id' => Auth::user()->id,
            'customer_id'=> $id,
            'typeDisposit_id'=>$request->get('typeDisposit_id'),
            'employee_id' => $request->get('employee_id')
        ]);
//        if($request->get('check') != "on"){
//        //! generate Id
//        $idAccount = DB::table('accounts')->max('id');
//        $account = Account::find($idAccount);
//        //! validation account is generated
//        if($account->generate==1){
//            return back()->with('warning','This account is generated');
//        }
//
//        $luckyCodeAmount = ROUND($account->amount / $account->typeDisposits->money - 0.5)* $account->typeDisposits->ticket;
//        //! LOOP LUCKY CODE
//        for($i=0;$i<$luckyCodeAmount;$i++){
//           LuckyCode::create([
//            'account_id' => $account->id
//           ]);
//           $idLuckyCode = DB::table('lucky_codes')->max('id');
//           $LuckyCode = LuckyCode::find($idLuckyCode);
//           $LuckyCode->idCode = 1000000 + $idLuckyCode;
//           $LuckyCode->save();
//        }
//
//        $account->generate = 1;
//        $account->save();
//    }
        return redirect()->route('lucky.show');
    }
    public function destroy($id){
        $checkWin = WinRandom::all()->pluck('luckyCode_id')->toArray();
        $account = Account::find($id);
        $checkLuckyCode =LuckyCode::all()->where('account_id','=',$id)
        ->intersect(LuckyCode::whereIn('id',$checkWin)->get())->count();
        if($checkLuckyCode>0){
            return back()->with('warning','ທ່າ​ນ​ບໍ່​ສາ​ມາດ​ລຶບ​ບັນ​ຊີ​ທີ​ຖືກ​ລາງ​ວັນ​ໄດ້');
        }
        $account->delete();
        return back()->with('success','ທ່ານໄດ້​ລືບ​ບັນ​ຊີ​ລູກ​ຄ້າ​ສຳ​ເລັດ​ແລ້ວ');
    }
    public function show($id){
        $account = Account::find($id);

        return view('deposit.showAccount')->with('account',$account);
    }
}
