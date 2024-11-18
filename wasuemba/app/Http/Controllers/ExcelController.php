<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;

class ExcelController extends Controller
{
    public function index()
    {
        return view('upload-excel');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new DataImport, $request->file('file'));

        return redirect()->route('upload-excel')->with('success', 'Data berhasil diimport!');
    }

    public function dashboard()
    {
        $data = Data::all();
        return view('data', compact('data'));
    }
}
