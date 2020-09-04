<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeDisposit;
class TypeController extends Controller
{
    public function index(){
        return view('type.index')->with('types',TypeDisposit::all());
    }
    public function create(){
        $type = New TypeDisposit();
        return view('type.create')->with('type',$type);
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'period' => 'required',
            'type' => 'required',
            'money' => 'required'
        ]);
        TypeDisposit::create([
            'period' => $request->get('period'),
            'yearOrMonth' => $request->get('yearOrMonth'),
            'type' => $request->get('type'),
            'money' => $request->get('money'),
            'ticket' => $request->get('ticket'),
        ]);
        return redirect()->route('type.index')->with('success','ເພີ່ມ​ປະ​ເພດ​ເງີນ​ຝາກ​ສຳ​ເລັດ');
        
    }
}
