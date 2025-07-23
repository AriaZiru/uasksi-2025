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
        Schema::create('detail_peminjamen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_peminjaman_barang')->constrained('peminjaman_barangs')->onDelete('cascade');
            $table->foreignId('id_barang')->constrained('daftar_barangs')->onDelete('cascade');
            $table->integer('jumlah_peminjaman');
            $table->string('catatan_barang_kembali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjamen');
    }
};
