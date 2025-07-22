<?php

namespace App\Filament\Admin\Resources\PeminjamanBarangResource\Pages;

use App\Filament\Admin\Resources\PeminjamanBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeminjamanBarang extends EditRecord
{
    protected static string $resource = PeminjamanBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
