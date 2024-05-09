<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesawatResource\Pages;
use App\Filament\Resources\PesawatResource\RelationManagers;
use App\Models\Pesawat;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesawatResource extends Resource
{
    protected static ?string $model = Pesawat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([Card::make()->schema([TextInput::make('kode_pesawat'), TextInput::make('tipe_pesawat'),FileUpload::make('image'), TextInput::make('kapasitas_kursi')])]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')->state(static function (HasTable $livewire, $rowLoop): string {
                    return (string) ($rowLoop->iteration + $livewire->getTableRecordsPerPage() * ($livewire->getTablePage() - 1));
                }),
                TextColumn::make('kode_pesawat'),
                TextColumn::make('tipe_pesawat'),
                ImageColumn::make('image')
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
            'index' => Pages\ListPesawats::route('/'),
            'create' => Pages\CreatePesawat::route('/create'),
            'edit' => Pages\EditPesawat::route('/{record}/edit'),
        ];
    }
}
