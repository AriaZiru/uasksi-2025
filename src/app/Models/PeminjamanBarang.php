<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeminjamanBarang extends Model
{
    protected $fillable = [
        'nama','nomor_telepon','email', 'tanggal_pinjam', 'tanggal_kembali'
    ];

    public function DetailPeminjaman(){
        return $this->hasMany(DetailPeminjaman::class, 'id_peminjaman_barang');
    }
}
