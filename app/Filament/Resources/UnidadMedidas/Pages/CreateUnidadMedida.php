<?php

namespace App\Filament\Resources\UnidadMedidas\Pages;

use App\Filament\Resources\UnidadMedidas\UnidadMedidaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUnidadMedida extends CreateRecord
{
    protected static string $resource = UnidadMedidaResource::class;

    protected static ?string $recordRouteKeyName = 'code';

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
