<?php

namespace App\Filament\Resources\TipoDePersonas\Pages;

use App\Filament\Resources\TipoDePersonas\TipoDePersonaResource;
use Filament\Resources\Pages\ListRecords;

class ListTipoDePersonas extends ListRecords
{
    protected static string $resource = TipoDePersonaResource::class;

    protected function getHeaderActions(): array
    {
        return []; 
    }
}
