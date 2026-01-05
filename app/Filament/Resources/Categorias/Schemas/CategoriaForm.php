<?php

namespace App\Filament\Resources\Categorias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información de la categoría')
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('categoria')
                            ->label('Nombre')
                            ->required(),

                        Toggle::make('active')
                            ->label('Activo')
                            ->default(true),
                    ]),
            ]);
    }
}
