<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeDisposit;
use App\Account;
class TypeController extends Controller
{
    public function index(){
        return view('type.index')->with('types',TypeDisposit::all());
    }
    public function create(){
        $type = New TypeDisposit();
        return view('type.create')->with('type',$type);
    }
    public function edit($id){
        $type = TypeDisposit::find($id);
        return view('type.edit')->with('type',$type);
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'period' => 'required',
            'type' => 'required',
            'money' => 'required'
        ]);
        $type = TypeDisposit::find($id);
        $type->update([
            'period' => $request->get('period'),
            'yearOrMonth' => $request->get('yearOrMonth'),
            'type' => $request->get('type'),
            'money' => $request->get('money'),
            'ticket' => $request->get('ticket'),
        ]);
        return redirect()->route('type.index')->with('success','​ທ່າ​ນ​ໄດ້ແກ້​ໄຂ​ປະ​ເພດ​ເງີນ​ຝາກ​ສຳ​ເລັດ');
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
        return redirect()->route('type.index')->with('success','ທ່າ​ນ​ໄດ້ເພີ່ມ​ປະ​ເພດ​ເງີນ​ຝາກ​ສຳ​ເລັດ');
        
    }
    public function destroy($id){
        $type = TypeDisposit::find($id);
        $check = Account::where('typeDisposit_id','=',$id)->count();
        if($check > 0){
            return back()->with('warning','ທ່າ​ນ​ບໍ່​ສາ​ມາດ​ລຶບ​ຮູບ​ແບບ​ໄລ​ຍະ​ເງິນຝາກ​ທີ່​ໄດ້​ໃຊ້​ກັບ​ລູກ​ຄ້າ​ແລ້ວ​ໄດ້');
        }
        $type->delete();
        return back()->with('success','ທ່າ​ນໄດ້​ລຶບ​ຮູບ​ແບບ​ໄລ​ຍະ​ເງິນຝາກ​​ສຳ​ເລັດແລ້ວ​');
    }
}
