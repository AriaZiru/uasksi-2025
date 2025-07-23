<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DaftarBarang;

class DaftarBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_barang' => 'Laptop ASUS ROG',
                'kondisi_barang' => 'baik',
                'status' => 'aktif',
                'jumlah' => 5,
            ],
            [
                'nama_barang' => 'Printer Epson L3110',
                'kondisi_barang' => 'baik',
                'status' => 'aktif',
                'jumlah' => 2,
            ],
            [
                'nama_barang' => 'Kursi Kantor Ergonomis',
                'kondisi_barang' => 'baik',
                'status' => 'aktif',
                'jumlah' => 10,
            ],
            [
                'nama_barang' => 'Meja Kerja Kayu',
                'kondisi_barang' => 'baik',
                'status' => 'aktif',
                'jumlah' => 3,
            ],
            [
                'nama_barang' => 'Proyektor BenQ',
                'kondisi_barang' => 'baik',
                'status' => 'hilang',
                'jumlah' => 1,
            ],
        ];

        foreach ($data as $barang) {
            DaftarBarang::create($barang);
        }
    }
}
