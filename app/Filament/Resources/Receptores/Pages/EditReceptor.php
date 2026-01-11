<?php

namespace App\Filament\Resources\Receptores\Pages;

use App\Filament\Resources\Receptores\ReceptorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReceptor extends EditRecord
{
    protected static string $resource = ReceptorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
