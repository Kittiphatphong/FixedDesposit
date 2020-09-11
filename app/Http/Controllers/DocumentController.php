<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Customer;
class DocumentController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }  
    public function index(){
        
        return view('document.index')->with('documents',Document::all());
    }
    public function create(){
        $document = New Document();
        return view('document.create')->with('document',$document);
    }
    public function edit($id){
        $document = Document::find($id);
        return view('document.edit')->with('document',$document);
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'type' => 'required',
           
        ]);
        $type = Document::find($id);
        $type->update([
            'type' => $request->get('type'),
        ]);
        return redirect()->route('document.index')->with('success','​ທ່າ​ນ​ໄດ້ແກ້​ໄຂ​ສຳ​ເລັດ');
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'type' => 'required',
        ]);
        Document::create([ 
            'type' => $request->get('type'),
        ]);
        return redirect()->route('document.index')->with('success','ທ່າ​ນ​ໄດ້ເພີ່ມ​​ສຳ​ເລັດ');
        
    }
    public function destroy($id){
        $type = Document::find($id);
        $check = Customer::where('document_id','=',$id)->count();
        if($check > 0){
            return back()->with('warning','ທ່າ​ນ​ບໍ່​ສາ​ມາດ​ລຶບແບບ​ເອ​ກະ​ສານ​ທີ່​ໄດ້​ໃຊ້​ກັບ​ລູກ​ຄ້າ​ແລ້ວ​ໄດ້');
        }
        $type->delete();
        return back()->with('success','ທ່າ​ນໄດ້​ລຶບ​ຮູບ​ແບບ​ເອ​ກະ​ສານເອະເອະ​​ສຳ​ເລັດແລ້ວ​');
    }
}
