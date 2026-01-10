<?php

namespace App\Filament\Resources\TipoDocumentoIdentificacionRS\Pages;

use App\Filament\Resources\TipoDocumentoIdentificacionRS\TipoDocumentoIdentificacionRResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTipoDocumentoIdentificacionR extends EditRecord
{
    protected static string $resource = TipoDocumentoIdentificacionRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
