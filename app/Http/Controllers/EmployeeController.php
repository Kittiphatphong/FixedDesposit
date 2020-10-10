<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Account;
use DB;
use App\Exports\ExcelExport;
use App\Exports\SearchExport;
use Maatwebsite\Excel\Facades\Excel;
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
        $accounts = Account::all()->pluck('employee_id')->toArray();
        $employees = Employee::all()->intersect(Employee::whereIn('id', $accounts)->get());
        return view('employee.report')->with('employees',$employees);
    }
    public function search(Request $request){
        $start = $request->start;
        $end = $request->end;
        $employees = DB::table('accounts')
        ->join('employees', 'employees.id', '=', 'accounts.employee_id')
        ->WhereBetween('accounts.start',[$start,$end])
        ->select('accounts.employee_id','employees.fname','employees.lname','employees.nname','employees.company','employees.department','employees.position','employees.contact',
         DB::raw('SUM(amount) as amount'),DB::raw('count(amount) as customer'),DB::raw('SUM(oldAmount) as oldAmount'))
        ->groupBy('accounts.employee_id','employees.fname','employees.lname','employees.nname','employees.company','employees.department','employees.position','employees.contact')
        ->get();
        return view('employee.search')
        ->with('employees',$employees)
        ->with('start',$start)
        ->with('end',$end);
    }
    public function view(Request $request, $id){
        if(isset($request->start)){
            $accounts = Account::all()->where('employee_id','=',$id)
            ->whereBetween('start', [$request->start, $request->end]);
            return view ('employee.view')->with('accounts',$accounts);
        }
        $accounts = Account::all()->where('employee_id','=',$id);
        return view ('employee.view')->with('accounts',$accounts);
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

    public function editOldAmount(Request $request){
    $account = Account::find($request->get('id'));
    $oldAmount=round(str_replace(',','',$request->get('oldAmount')));
    if($oldAmount>0 && $oldAmount<999){
        return back()->with('warning','jay');
    }
    if(round($oldAmount) > round($account->amount)){
        return back()->with('warning','ຈຳ​ນວນ​ເງີນ​ຝາກ​ເກົ່າ​ຫຼາຍ​ກົ່ວ​ເງີນ​ຝາກ​ປະ​ຈຸ​ບັນ');
    }
    $account->oldAmount = $oldAmount;
    $account->save();
    return back()->with('success','ທ່າ​ນ​ໄດ້​ໃສ່​ຈຳ​ນວນ​ເງີນ​ຝາກ​ເກົ່າ​ສຳ​ເລັດ');
    }

    public function export() 
    {
        return Excel::download(new ExcelExport, 'Staffs.xlsx');
    }
    public function query(Request $request) 
    {
        return Excel::download(new SearchExport($request->start,$request->end), 'Staffs.xlsx');
    }
}
