<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPeminjamanController extends Controller
{
    //  public function store(Request $request)
    // {
    //     $request->validate([
    //         'id_peminjaman_barang' => 'required|exists:peminjaman_barangs,id',
    //         'id_barang' => 'required|exists:daftar_barangs,id',
    //         'jumlah_peminjaman' => 'required|integer|min:1',
    //     ]);

    //     $barang = DaftarBarang::findOrFail($request->id_barang);

    //     try {
    //         $barang->kurangiStok($request->jumlah_peminjaman);

    //         DetailPeminjaman::create([
    //             'id_peminjaman_barang' => $request->id_peminjaman_barang,
    //             'id_barang' => $request->id_barang,
    //             'jumlah_peminjaman' => $request->jumlah_peminjaman,
    //             'catatan_barang_kembali' => $request->catatan_barang_kembali,
    //         ]);

    //         return back()->with('success', 'Peminjaman berhasil.');
    //     } catch (\Exception $e) {
    //         return back()->withErrors($e->getMessage());
    //     }
    // }
}
