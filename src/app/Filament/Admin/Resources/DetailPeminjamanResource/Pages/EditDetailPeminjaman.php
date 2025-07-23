<?php

namespace App\Filament\Admin\Resources\DetailPeminjamanResource\Pages;

use App\Filament\Admin\Resources\DetailPeminjamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditDetailPeminjaman extends EditRecord
{
    protected static string $resource = DetailPeminjamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function beforeSave(): void
    {
        $dataBaru = $this->form->getState();
        $detailLama = $this->record;

        $barang = \App\Models\DaftarBarang::findOrFail($dataBaru['id_barang']);

        $selisih = $dataBaru['jumlah_peminjaman'] - $detailLama->jumlah_peminjaman;

        if ($selisih > 0 && $barang->jumlah < $selisih) {
            Notification::make()
                ->title('Stok tidak mencukupi')
                ->body("Stok tersedia: {$barang->jumlah}, tambahan diminta: {$selisih}")
                ->danger()
                ->send();

            $this->halt(); // Stop proses edit
            return;
        }

        $barang->jumlah -= $selisih;
        $barang->save();
    }
}
