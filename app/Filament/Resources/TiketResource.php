<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Daftar Tiket';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
                TextInput::make('nama'),
                Select::make('pesawat_id')
                    ->relationship('pesawat', 'tipe_pesawat'),
                Select::make('bandaratujuan_id')
                    ->relationship('bandaraTujuan', 'nama_bandara'),
                Select::make('bandaraasal_id')
                    ->relationship('bandaraAsal', 'nama_bandara'),
                DatePicker::make('tanggal_keberangkatan'),
                TimePicker::make('jam_berangkat'),
                TimePicker::make('jam_tiba'),
                TextInput::make('harga_tiket')
                    ->numeric()
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('No')->state(
                static function (HasTable $livewire, $rowLoop): string {
                    return (string) (
                        $rowLoop->iteration +
                        ($livewire->getTableRecordsPerPage() * (
                            $livewire->getTablePage() - 1
                        ))
                    );
                }
            ),
            TextColumn::make('nama'),
            TextColumn::make('pesawat.tipe_pesawat')
                ->label('Pesawat'),
            TextColumn::make('bandaraasal.nama_bandara')
                ->label('Bandara Asal'),
            TextColumn::make('bandaratujuan.nama_bandara')
                ->label('Bandara Tujuan'),
            TextColumn::make('tanggal_keberangkatan'),
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
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}
