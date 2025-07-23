<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->enum('kondisi_barang', ['baik', 'rusak', 'servis'])->default('baik');
            $table->enum('status', ['aktif', 'dipinjam', 'hilang', 'rusak'])->default('aktif');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_barangs');
    }
};
