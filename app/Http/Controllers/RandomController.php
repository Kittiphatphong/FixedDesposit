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
            if($request->get('amount')==1000000){      
            $checkCustomer = DB::table('accounts')
            ->join('lucky_codes', 'accounts.id', '=', 'lucky_codes.account_id')
            ->join('customers','customers.id','=','accounts.customer_id')
            ->join('win_randoms','lucky_codes.id','=','win_randoms.luckyCode_id')
            ->select('customers.id')
            ->where('win_randoms.amount','=',1000000)
            ->groupBy('customers.id')
            ->havingRaw('count(customers.id) >= ?', [3])
            ->pluck('customers.id')->toArray();
            $getLuckyCode = DB::table('lucky_codes')
            ->join('accounts', 'accounts.id', '=', 'lucky_codes.account_id')
            ->join('customers','customers.id','=','accounts.customer_id')
            ->select('lucky_codes.id')
            ->whereIn('customers.id',$checkCustomer)
            ->pluck('lucky_codes.id')->toArray();
            $checkWin = WinRandom::all()->pluck('luckyCode_id')->toArray(); //! check lucky code
            $allCancel = array_merge($getLuckyCode,$checkWin);
            $rand = LuckyCode::all()
            ->intersect(LuckyCode::whereNotIn('id', $allCancel)->get())
            ->random()->id;
        // if($rand->isEmpty()){
        //     $output= [1,1,1,1,1,1,1,1];
        //     $name="N/A";
        //     $list = '<p><span class="f">-</span><span class="float-right">-</span> </p>';
        // }else{
            $winRandom = new WinRandom();
            $winRandom->luckyCode_id = $rand;
            $winRandom->amount = $request->get('amount');
            $winRandom->save();   
            // $winRandom =  WinRandom::find();        
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
        // }

        $data = array('info_data'=>$output,'name'=>$name,'list'=>$list);
        echo json_encode($data);
        }
    }
    //! else for check value
    if($request->get('amount')!=1000000){ 
        $checkWin = WinRandom::all()->pluck('luckyCode_id')->toArray(); //! check lucky code
            $rand = LuckyCode::all()
            ->intersect(LuckyCode::whereNotIn('id',  $checkWin)->get())
            ->random()->id;
   
        $winRandom = new WinRandom();
        $winRandom->luckyCode_id = $rand;
        $winRandom->amount = $request->get('amount');
        $winRandom->save();          
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
