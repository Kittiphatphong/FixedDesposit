<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use DB;
use App\LuckyCode;
use PDF;
class LuckyCodeController extends Controller
{
    public function index(){
        return view('luckyCode.index')->with('luckyCodes',LuckyCode::all());
    }
    public function show(){
        
            // PDF::AddPage('L', 'A4');
            // PDF::SetFont('freeserif ', 'B', 20, '', 'false');
            // PDF::SetY(10); //ระยะห่างจากด้านบนมาล่าง
            // PDF::SetX(0); //ระยะห่างจากซ้ายไปขวา
            // PDF::Cell(0, 0, 'อีสานเดฟ มหาสารคาม', 0, false, 'C', 0, '', 0, false, 'M', 'M');
            // PDF::SetFont('freeserif ', 'B', 16, '', 'false');
            // PDF::SetY(30); //ระยะห่างจากด้านบนมาล่าง
            // PDF::SetX(10); //ระยะห่างจากซ้ายไปขวา
            // PDF::Cell(0, 0, 'วัน/เดือน/ปี', 1, false, 'C', 0, '', 0, false, 'M', 'M');
            // PDF::SetFont('freeserif ', 'B', 16, '', 'false');
            // PDF::SetY(34); //ระยะห่างจากด้านบนมาล่าง
            // PDF::SetX(10); //ระยะห่างจากซ้ายไปขวา
            // PDF::MultiCell(40, 5, 'เดือน/ปี', 1, 'C',0, 1, '', '', true);
            // PDF::Output('PDF-Report.pdf','I');
        return view('luckyCode.show');
        // $view = \view::make('luckyCode.show');
        // $html_content = $view->render();
        // PDF::SetTitle('Print certificate');
        // PDF::SetFont('phetsarathot', '', 10);
        // PDF::AddPage('L', 'A4');
        // PDF::writeHTML($html_content,true,false,true,false,'');
        // PDF::Output(uniqid().'SamplePDF.pdf','D');
    }
    public function store($id){

}
}