<?php

namespace App\Imports;

use App\Models\Data;  // Ganti dengan model yang sesuai
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    public function model(array $row)
    {
        return new Data([
            'name' => $row[0],        // Sesuaikan dengan posisi kolom pada file Excel
            'Jumlah_Penduduk' => $row[1],
            'Jumlah_Pengangguran' => $row[2],
            'Jumlah_Pengunjung' => $row[3],
        ]);
    }
}
