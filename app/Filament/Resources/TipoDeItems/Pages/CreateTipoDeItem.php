<?php

namespace App\Filament\Resources\TipoDeItems\Pages;

use App\Filament\Resources\TipoDeItems\TipoDeItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTipoDeItem extends CreateRecord
{
    protected static string $resource = TipoDeItemResource::class;

    protected static ?string $recordRouteKeyName = 'code';

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
