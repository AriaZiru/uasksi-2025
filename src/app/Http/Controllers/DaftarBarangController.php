<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarBarangController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'kondisi_barang' => 'required|in:baik,rusak,servis',
        'status' => 'required|in:aktif,dipinjam,hilang,rusak',
        'jumlah' => 'required|integer|min:0',
    ]);

    DaftarBarang::create($validated);

    return response()->json(['message' => 'Barang berhasil ditambahkan']);
}
}
