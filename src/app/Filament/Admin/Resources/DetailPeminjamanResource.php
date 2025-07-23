<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DetailPeminjamanResource\Pages;
use App\Filament\Admin\Resources\DetailPeminjamanResource\RelationManagers;
use App\Models\DetailPeminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Fillament\Forms\Tables\Select;

class DetailPeminjamanResource extends Resource
{
    protected static ?string $model = DetailPeminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_peminjaman_barang')
                    ->required()
                    ->relationship('peminjaman', 'nama'),
                Forms\Components\Select::make('id_barang')
                    ->required()
                    ->relationship('DaftarBarang', 'nama_barang'), 
                Forms\Components\TextInput::make('jumlah_peminjaman')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('catatan_barang_kembali')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_peminjaman_barang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_barang')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_peminjaman')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('catatan_barang_kembali')
                    ->searchable(),
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
            'index' => Pages\ListDetailPeminjamen::route('/'),
            'create' => Pages\CreateDetailPeminjaman::route('/create'),
            'edit' => Pages\EditDetailPeminjaman::route('/{record}/edit'),
        ];
    }
}
