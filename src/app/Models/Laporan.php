<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'jenis_laporan', 'deskripsi_laporan','periode_bulan'
    ];
}
