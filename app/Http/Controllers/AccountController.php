<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Account;
use App\TypeDisposit;
class AccountController extends Controller
{
    public function create($id){
        $customer = Customer::find($id);
        return view ('deposit.makeAccount')->with('customer',$customer)->with('types',TypeDisposit::all());
    }
    public function store(Request $request,$id){
        dd($id);
    }
}
