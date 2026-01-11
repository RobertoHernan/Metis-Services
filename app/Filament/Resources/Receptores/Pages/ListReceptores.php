<?php

namespace App\Filament\Resources\Receptores\Pages;

use App\Filament\Resources\Receptores\ReceptorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReceptores extends ListRecords
{
    protected static string $resource = ReceptorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
