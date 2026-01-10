<?php

namespace App\Filament\Resources\UnidadMedidas\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class UnidadMedidaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make()
                ->columnSpanFull() 
                ->schema([
                    Grid::make(2)
                        ->schema([
                            TextInput::make('code')
                                ->label('Código')
                                ->required()
                                ->maxLength(10)
                                ->disabledOn('edit'),

                            TextInput::make('name')
                                ->label('Nombre')
                                ->required()
                                ->maxLength(255),

                            Toggle::make('active')
                                ->label('Activo')
                                ->default(true),

                            TextInput::make('status')
                                ->label('Estado')
                                ->default('activo')
                                ->disabled(),
                        ]),
                ]),
        ]);
    }
}
