<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

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
         'idNumber' => 'required',
         'address' => 'required'
        ]);
    Customer::create([
         'fname' =>$request->get('fname'),
         'lname' =>$request->get('lname'),
         'contact' => $request->get('contact'),
         'idNumber' => $request->get('idNumber'),
         'address' => $request->get('address'),
    ]);
    return back()->with('success','ເພີ້ມ​ລູກ​ຄ້າ​ສຳ​ເລັດ');
    }

    public function edit($id){

    }

    public function update(Request $request,$id){

    }

    public function destroy($id){

    }
    
}
