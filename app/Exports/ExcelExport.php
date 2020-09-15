<?php

namespace App\Exports;

use App\Account;
use App\Employee;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExcelExport implements FromView
{
    public function view(): View
    {
        $accounts = Account::all()->pluck('employee_id')->toArray();
        $employees = Employee::all()->intersect(Employee::whereIn('id', $accounts)->get());
        return view('employee.export')->with('employees',$employees);
    }
}
