<?php

namespace App\Filament\Resources\TipoDocumentoIdentificacionRs\Pages;

use App\Filament\Resources\TipoDocumentoIdentificacionRs\TipoDocumentoIdentificacionRResource;
use Filament\Resources\Pages\ListRecords;

class ListTipoDocumentoIdentificacionRs extends ListRecords
{
    protected static string $resource = TipoDocumentoIdentificacionRResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
