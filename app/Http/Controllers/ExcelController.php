<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Imports\UserImport;


class ExcelController extends Controller
{
    //

    public function importExportView(){
        return view('import');
    }
    public function export(){
        return Excel::download(new UserExport,'users.xlsx');
    }
    public function import(){
        Excel::import(new UserImport,request()->file('file'));
        return back();
    }
}
