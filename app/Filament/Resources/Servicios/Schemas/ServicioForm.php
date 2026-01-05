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
        return $schema
            ->components([
                Section::make('Información del servicio')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(2)
                            ->schema([

                                TextInput::make('nombre')
                                    ->label('Nombre')
                                    ->placeholder('Ej. Consulta técnica')
                                    ->required(),

                                TextInput::make('precio')
                                    ->label('Precio')
                                    ->numeric()
                                    ->prefix('$')
                                    ->placeholder('0.00'),

                                Select::make('categoria_id')
                                    ->label('Categoría')
                                    ->relationship('categoria', 'nombre')
                                    ->searchable()
                                    ->preload()
                                    ->placeholder('Seleccione una opción')
                                    ->required(),

                                Select::make('unidad_medida_id')
                                    ->label('Unidad de medida')
                                    ->relationship('unidadMedida', 'nombre')
                                    ->searchable()
                                    ->preload()
                                    ->placeholder('Seleccione una opción')
                                    ->required(),

                                Toggle::make('activo')
                                    ->label('Activo')
                                    ->default(true)
                                    ->inline(true),
                            ]),
                    ]),
            ]);
    }
}
