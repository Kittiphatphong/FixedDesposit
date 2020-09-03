<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
    public function index(){
        return view('employee.index')->with('employees',Employee::all());
    }
    public function create(){
        return view('employee.create');
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
}
