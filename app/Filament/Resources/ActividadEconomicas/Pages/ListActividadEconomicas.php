<?php

namespace App\Filament\Resources\ActividadEconomicas\Pages;

use App\Filament\Resources\ActividadEconomicas\ActividadEconomicaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActividadEconomicas extends ListRecords
{
    protected static string $resource = ActividadEconomicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
