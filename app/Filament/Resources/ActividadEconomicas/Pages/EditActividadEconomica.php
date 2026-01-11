<?php

namespace App\Filament\Resources\ActividadEconomicas\Pages;

use App\Filament\Resources\ActividadEconomicas\ActividadEconomicaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditActividadEconomica extends EditRecord
{
    protected static string $resource = ActividadEconomicaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
