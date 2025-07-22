<?php

namespace App\Filament\Admin\Resources\DaftarBarangResource\Pages;

use App\Filament\Admin\Resources\DaftarBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftarBarang extends EditRecord
{
    protected static string $resource = DaftarBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
