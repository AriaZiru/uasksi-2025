<?php

namespace App\Filament\Admin\Resources\DaftarBarangResource\Pages;

use App\Filament\Admin\Resources\DaftarBarangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarBarangs extends ListRecords
{
    protected static string $resource = DaftarBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
