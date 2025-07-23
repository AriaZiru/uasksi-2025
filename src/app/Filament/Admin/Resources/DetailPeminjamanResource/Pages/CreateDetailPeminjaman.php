<?php

namespace App\Filament\Admin\Resources\DetailPeminjamanResource\Pages;

use Filament\Notifications\Notification;
use App\Filament\Admin\Resources\DetailPeminjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDetailPeminjaman extends CreateRecord
{
    protected static string $resource = DetailPeminjamanResource::class;

    protected function beforeCreate(): void
{
    $data = $this->form->getState();

    $barang = \App\Models\DaftarBarang::findOrFail($data['id_barang']);

    if ($data['jumlah_peminjaman'] > $barang->jumlah) {
        Notification::make()
            ->title('Gagal mengubah jumlah peminjaman')
            ->body("Stok tidak cukup. Tersisa: {$barang->jumlah}, diminta: {$data['jumlah_peminjaman']}")
            ->danger()
            ->send();
             $this->halt();
             return;
    }
    
    $barang->jumlah -= $data['jumlah_peminjaman'];
    $barang->save();
}

}
