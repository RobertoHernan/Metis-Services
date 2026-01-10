<?php

namespace App\Filament\Resources\Servicios\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServicioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Información del servicio')
                ->columnSpanFull()
                ->schema([
                    Grid::make(2)
                        ->schema([

                            TextInput::make('codigo')
                                ->label('Código')
                                ->required()
                                ->maxLength(50),

                            TextInput::make('nombre')
                                ->label('Nombre')
                                ->required()
                                ->maxLength(255),

                            Select::make('tipo_de_item_code')
                                ->label('Tipo de ítem')
                                ->relationship('tipoDeItem', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),

                            TextInput::make('precio_base')
                                ->label('Precio base')
                                ->numeric()
                                ->prefix('$')
                                ->required(),

                            Toggle::make('active')
                                ->label('Activo')
                                ->default(true)
                                ->inline(false),
                        ]),
                ]),
        ]);
    }
}
