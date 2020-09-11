<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Account;
class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }  
    public function index(){
        return view('employee.index')->with('employees',Employee::all());
    }
    public function report(){
        return view('employee.report')->with('employees',Employee::all());
    }
    public function view($id){
        $employee = Employee::find($id);
        return view ('employee.view')->with('employee',$employee);
    }
    public function create(){
        $employee = new Employee(); 
        return view('employee.create')->with('employee',$employee);
    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit')
        ->with('employee',$employee)
        ->with('check','check');
        
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'nname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'contact' => 'required'
        ]);
        $employee = Employee::find($id);
        $employee->update([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'nname' => $request->get('nname'),
            'company' => $request->get('company'),
            'position' => $request->get('position'),
            'department' => $request->get('department'),
            'contact' => $request->get('contact')
        ]);
        return redirect()->route('employee.index')->with('success','ແກ້​ໄຂຂຂໍ້​ມູນ​ພະ​ນັກ​ງານ​ສຳ​ເລັດ​');
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'nname' => 'required',
            'position' => 'required',
            'department' => 'required',
            'contact' => 'required'
        ]);
        Employee::create([
            'fname' => $request->get('fname'),
            'lname' => $request->get('lname'),
            'nname' => $request->get('nname'),
            'company' => $request->get('company'),
            'position' => $request->get('position'),
            'department' => $request->get('department'),
            'contact' => $request->get('contact')
        ]);
        return redirect()->route('employee.index')->with('success','ເພີ່ມ​ພະ​ນັກ​ງານ​​ສຳ​ເລັດ');
        
    }
    public function destroy($id){
    $checkEmployee = Account::where('employee_id','=',$id)->count();
    if($checkEmployee>0){
        return back()->with('warning','ທ່າ​ນ​ບໍ່​ສາ​ມາດ​ລຶບ​ພະ​ນັກ​ງານ​ຜູ້​ທີ່​ໄດ້​ແນະ​ນຳ​ລູກ​ຄ້າ​ແລ້ວ​ໄດ້');
    }
    $employee = Employee::find($id);
    $employee->delete();
    return back()->with('success','ທ່າ​ນໄດ້​ລຶບ​ພະ​ນັກ​ງານ​ສຳ​ເລັດ');
    }
}
