<?php

namespace App\Exports;

use App\WinRandom;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class WinExport implements FromView
{
    public function view(): View
    {
        return view('random.exportWin')->with('randoms',WinRandom::all()->where('status','=',1));
    }
}
