<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarBarang extends Model
{
    protected $fillable=[
        "nama_barang",'kondisi_barang', 'kondisi', 'status','jumlah'
    ];
}
