<?php

namespace App\Filament\Resources\PesawatResource\Pages;

use App\Filament\Resources\PesawatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesawat extends EditRecord
{
    protected static string $resource = PesawatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
