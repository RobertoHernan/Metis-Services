<?php

namespace App\Filament\Resources\TipoDePersonas\Pages;

use App\Filament\Resources\TipoDePersonas\TipoDePersonaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTipoDePersona extends EditRecord
{
    protected static string $resource = TipoDePersonaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
