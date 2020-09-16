<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Account;
use Illuminate\Http\Request;
use App\Document;
use DB;
class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function index(){
        return view('deposit.customer')->with('customers',Customer::all());
    }
    public function create(){
        $customer = new Customer();
        return view('deposit.createCustomer')->with('customer',$customer)->with('documents',Document::all());
    }
    public function store(Request $request){
        $this->validate($request,[
         'fname' =>'required',
         'lname' =>'required',
         'contact' => 'required|numeric',
         'document_id' => 'required',
         'documentNumber' => 'required|unique:customers',
         'address' => 'required'
        ]);
    Customer::create([
         'fname' =>$request->get('fname'),
         'lname' =>$request->get('lname'),
         'contact' => $request->get('contact'),
         'document_id' => $request->get('document_id'),
         'documentNumber' => $request->get('documentNumber'),
         'address' => $request->get('address'),
    ]);
    $idCustomer = DB::table('customers')->max('id');
    return redirect()->route('account.create',$idCustomer);
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('deposit.editCustomer')->with('customer',$customer)->with('documents',Document::all());
    
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'fname' =>'required',
            'lname' =>'required',
            'contact' => 'required|numeric',
            'document_id' => 'required',
            'documentNumber' => 'required',
            'address' => 'required'
           ]);
           Customer::find($id)->update([
            'fname' =>$request->get('fname'),
            'lname' =>$request->get('lname'),
            'contact' => $request->get('contact'),
            'documentNumber' => $request->get('documentNumber'),
            'address' => $request->get('address'),
       ]); 
       return redirect()->route('customer.index')->with('success','ແກ້ໄຂ​ຂໍ໊​ມູນ​ລູກ​ຄ້າ​ສຳ​ເລັດ');
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
