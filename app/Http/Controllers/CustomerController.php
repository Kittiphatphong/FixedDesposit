<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Account;
use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    public function index(){
        return view('deposit.customer')->with('customers',Customer::all());
    }
    public function create(){
        $customer = new Customer();
        return view('deposit.createCustomer')->with('customer',$customer);
    }
    public function store(Request $request){
        $this->validate($request,[
         'fname' =>'required',
         'lname' =>'required',
         'contact' => 'required',
         'idNumber' => 'required|unique:customers',
         'address' => 'required'
        ]);
    Customer::create([
         'fname' =>$request->get('fname'),
         'lname' =>$request->get('lname'),
         'contact' => $request->get('contact'),
         'idNumber' => $request->get('idNumber'),
         'address' => $request->get('address'),
    ]);
    $idCustomer = DB::table('customers')->max('id');
    return redirect()->route('account.create',$idCustomer);
    }

    public function edit($id){

    }

    public function update(Request $request,$id){

    }

    public function destroy($id){
        $customer = Customer::find($id);
         $accountCustomer = Account::where('customer_id','=',$id);
         if($accountCustomer->count()>0){
             return back()->with('warning','ທ່າ​ນ​ບໍ່​ສາ​ມາດ​ລືບ​ລູກ​ຄ້າ​ທີ່​ມີ​ບັນ​ຊີ​ເງິນຝາກໄດ້');
         }
         $customer->delete();
         return back()->with('success','ລຶບ​ລູກ​ຄ້າ​ສຳ​ເລັດ');
    }
    
}
