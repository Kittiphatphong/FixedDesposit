<?php

namespace App\Http\Controllers;
use App\LuckyCode;
use App\WinRandom;
use App\Customer;
use App\Account;
use Illuminate\Http\Request;
use DB;
class RandomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index(){
        
        return view('random.function');
    }
    public function random(Request $request){
        if($request->ajax()){
        
        $rand = rand(DB::table('Lucky_codes')->min('id'),DB::table('Lucky_codes')->max('id'));  
        $checkWin = WinRandom::all()->pluck('luckyCode_id')->toArray(); 
        $checkLucky = LuckyCode::all()->where('id','=',$rand)->intersect(LuckyCode::whereNotIn('id', $checkWin)->get())->count();
           
            while($checkLucky!=1){
        $rand = rand(DB::table('Lucky_codes')->min('id'),DB::table('Lucky_codes')->max('id'));      
        $checkWin = WinRandom::all()->pluck('luckyCode_id')->toArray(); 
        $checkLucky = LuckyCode::all()->where('id','=',$rand)->intersect(LuckyCode::whereNotIn('id', $checkWin)->get())->count();
            }
           

        $winRandom = new WinRandom();
        $winRandom->luckyCode_id = $rand;
        $winRandom->amount = $request->get('amount');
        $winRandom->save();   
        // $winRandom =  WinRandom::find(10);        
        switch ($winRandom->luckyCodes->accounts->typeDisposits->type) {
        case "A":
            $code = 1;
        break;
        case "B":
            $code = 2;
        break;
        case "C":
            $code = 3;
        break;
  }
    $number  = array_map('intval', str_split($winRandom->luckyCodes->idCode));
    $output= [$number,$code];
    $name=WinRandom::find($winRandom->id)->luckyCodes->accounts->customers->fname.' '. WinRandom::find($winRandom->id)->luckyCodes->accounts->customers->lname;
    $code = $winRandom->luckyCodes->accounts->typeDisposits->type .$winRandom->luckyCodes->idCode;
    $list = '<p><span class="f">'.$code.'</span><span class="float-right">'.$name.'</span> </p>';
        $data = array('info_data'=>$output,'name'=>$name,'list'=>$list);
        echo json_encode($data);
        }
    }
    public function list(){
        $winingRandom = WinRandom::all()->pluck('luckyCode_id')->toArray();
        $luckCodes = LuckyCode::all()->intersect(LuckyCode::whereNotIn('id',$winingRandom)->get());
        return view('luckyCode.index')->with('luckyCodes',$luckCodes)->with('count',$luckCodes->count());
        
    }
    public function win(){
       return view('random.win')->with('randoms',WinRandom::all());
    }
    public function destroy($id){
        $winRandom = WinRandom::find($id);
        $winRandom->delete();
        return back()->with('success','ທ່າ​ນ​ໄດ້​ລຶບ​ລະ​ຫັດ​ຜູ້​ໂຊກ​ດີ​ສຳ​ເລັດ​ແລ້ວ');
    }
    public function view($id){
        $data = WinRandom::find($id);
        $idCustomer=$data->luckyCodes->accounts->customers->id; 
        $idAccount= $data->luckyCodes->accounts->id;
        $customer = Customer::find($idCustomer);
        $account = Account::find($idAccount);
        $percent = round(($account->luckyCodes->count()*100) / LuckyCode::all()->count(),2);    
        return view('random.view')->with('win',$data)
        ->with('customer',$customer)
        ->with('account',$account)
        ->with('percent',$percent);
    }
}
