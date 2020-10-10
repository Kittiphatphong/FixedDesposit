<?php

namespace App\Exports;

use App\Account;
use App\Employee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;
class SearchExport implements FromView
{
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
    public function view(): View
    {
       
        $employees = DB::table('accounts')
        ->join('employees', 'employees.id', '=', 'accounts.employee_id')
        ->WhereBetween('accounts.start',[$this->start,$this->end])
        ->select('accounts.employee_id','employees.fname','employees.lname','employees.nname','employees.company','employees.department','employees.position','employees.contact',
         DB::raw('SUM(amount) as amount'),DB::raw('count(amount) as customer'),DB::raw('SUM(oldAmount) as oldAmount'))
        ->groupBy('accounts.employee_id','employees.fname','employees.lname','employees.nname','employees.company','employees.department','employees.position','employees.contact')
        ->get();
        return view('employee.searchExport')
        ->with('employees',$employees)
        ->with('start',$this->start)
        ->with('end', $this->end);

        
    }
}
