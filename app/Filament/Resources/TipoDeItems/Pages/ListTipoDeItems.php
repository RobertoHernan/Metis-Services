<?php

namespace App\Filament\Resources\TipoDeItems\Pages;

use App\Filament\Resources\TipoDeItems\TipoDeItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTipoDeItems extends ListRecords
{
    protected static string $resource = TipoDeItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
