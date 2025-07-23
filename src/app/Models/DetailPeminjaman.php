<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $fillable = [
         'catatan_barang_kembali', 'jumlah_peminjaman'
    ];
}
