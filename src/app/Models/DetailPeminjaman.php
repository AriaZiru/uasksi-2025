<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $fillable = [
         'catatan_barang_kembali', 'jumlah_peminjaman'
    ];

    public function peminjaman(){
        return $this->belongsTo(PeminjamanBarang::class, 'id_peminjaman_barang');
    }

    public function DaftarBarang(){
        return $this->belongsTo(DaftarBarang::class, 'id_barang');
    }


}
