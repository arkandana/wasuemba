<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    // Jika nama tabel tidak mengikuti konvensi Laravel (misalnya 'products' untuk model Product)
    protected $table = 'datas'; // Ganti dengan nama tabel yang sesuai

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'tahun',       // Ganti dengan nama kolom yang sesuai
        'Jumlah_Penduduk',
        'Jumlah_Pengangguran',
        'Jumlah_Pengunjung',
        // Tambahkan kolom lain sesuai dengan tabel di database
    ];

    // Jika menggunakan timestamps (created_at, updated_at), biarkan default
    public $timestamps = true;
}
