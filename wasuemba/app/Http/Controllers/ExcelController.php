<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;
use Exception;
use Termwind\Components\Dd;

class ExcelController extends Controller
{
    public function index()
    {
        return view('upload-excel');
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        // Get the absolute path using public_path helper
        $filepath = storage_path('app/public/' . $filename);

        // Add proper error handling
        if (!file_exists($filepath) || !is_readable($filepath)) {
            // You might want to log this error
            //Log::error("CSV file not found or not readable: " . $filepath);
            return false;
        }

        $header = null;
        $data = array();
        if (($handle = fopen($filepath, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }

    public function arraytoDB($data)
    {
        try {
            for ($i = 0; $i < count($data); $i++) {
                Data::firstOrCreate($data[$i]);
            }

            return true;
        } catch (Exception $e) {
            dd($e);
            return false;
        }
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv',
        ]);

        $csvpath = $request->file('file')->store('files/csv', 'public');
        $data = $this->csvToArray($csvpath, $delimiter = ',');

        $success = $this->arraytoDB($data);
        if ($success) { 
            return redirect()->route('upload-excel')->with('success', 'Data berhasil diimport!');
        } else {
            return redirect()->route('upload-excel')->with('error', 'Data gagal diimport!');
        }
    }

    public function dashboard()
    {
        $data = Data::all();
        return view('data', compact('data'));
    }
}
