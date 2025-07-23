<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DaftarBarangResource\Pages;
use App\Filament\Admin\Resources\DaftarBarangResource\RelationManagers;
use App\Models\DaftarBarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Fillament\Forms\Tables\Select;

class DaftarBarangResource extends Resource
{
    protected static ?string $model = DaftarBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_barang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('kondisi_barang')
                    ->required()
                    ->options(["baik"=>'baik', 'rusak'=>'rusak', 'servis'=>'servis']),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options(['aktif'=>'aktif', 'dipinjam'=>'dipinjam', 'hilang'=>'hilang','rusak'=>'rusak']),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kondisi_barang'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDaftarBarangs::route('/'),
            'create' => Pages\CreateDaftarBarang::route('/create'),
            'edit' => Pages\EditDaftarBarang::route('/{record}/edit'),
        ];
    }
}
