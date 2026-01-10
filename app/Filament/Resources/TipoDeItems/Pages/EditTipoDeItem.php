<?php

namespace App\Filament\Resources\TipoDeItems\Pages;

use App\Filament\Resources\TipoDeItems\TipoDeItemResource;
use Filament\Resources\Pages\EditRecord;

class EditTipoDeItem extends EditRecord
{
    protected static string $resource = TipoDeItemResource::class;

    protected static ?string $recordRouteKeyName = 'code';
}
