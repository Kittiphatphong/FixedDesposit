<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use DB;
use App\LuckyCode;
use PDF;
class LuckyCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function index(){
        return view('luckyCode.index')->with('luckyCodes',LuckyCode::all());
    }
    public function view($id){
        $account = Account::find($id);
        return view('luckyCode.show')->with('account',$account);
    }
    public function show(){
        $idAccount = DB::table('accounts')->max('id');
        $account = Account::find($idAccount);
        return view('luckyCode.show')->with('account',$account);
    }
    public function store($id){

}
}