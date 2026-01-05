<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información personal del cliente')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('nombre')
                                    ->label('Nombre')
                                    ->placeholder('Ej. Juan Pérez')
                                    ->required(),

                                TextInput::make('apellido')
                                    ->label('Apellido')
                                    ->placeholder('Ej. Pérez')
                                    ->required(),

                                Select::make('documento_tipo')
                                    ->label('Tipo de documento')
                                    ->options([
                                        'dui' => 'DUI',
                                        'nit' => 'NIT',
                                        'pasaporte' => 'Pasaporte',
                                    ])
                                    ->searchable()
                                    ->required(),

                                Select::make('tipo_persona')
                                    ->label('Tipo de persona')
                                    ->options([
                                        'natural' => 'Persona natural',
                                        'juridica' => 'Persona jurídica',
                                    ])
                                    ->searchable()
                                    ->required(),

                                TextInput::make('direccion')
                                    ->label('Dirección')
                                    ->placeholder('Ej. Col. Escalón, San Salvador')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Section::make('Información comercial')
                    ->description('Datos fiscales y comerciales del cliente')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(4)
                            ->schema([
                                TextInput::make('actividad_economica')
                                    ->label('Actividad económica')
                                    ->required(),

                                TextInput::make('nrc')
                                    ->label('NRC')
                                    ->required(),

                                TextInput::make('dui')
                                    ->label('DUI')
                                    ->required(),

                                TextInput::make('nit')
                                    ->label('NIT')
                                    ->required(),
                            ]),
                        Toggle::make('paga_iva')
                            ->label('¿Este cliente paga IVA?')
                            ->helperText('Desactívalo si el cliente está exento de IVA')
                            ->default(true),
                    ]),

                Section::make('Información de contacto')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('correo_electronico')
                                    ->label('Correo electrónico')
                                    ->email()
                                    ->required(),

                                TextInput::make('telefono')
                                    ->label('Teléfono')
                                    ->tel()
                                    ->required(),

                                Select::make('pais')
                                    ->label('País')
                                    ->options([
                                        'SV' => 'El Salvador',
                                        'GT' => 'Guatemala',
                                        'HN' => 'Honduras',
                                    ])
                                    ->searchable()
                                    ->required(),

                                Select::make('departamento')
                                    ->label('Departamento')
                                    ->options([
                                        'SS' => 'San Salvador',
                                        'SA' => 'Santa Ana',
                                        'SM' => 'San Miguel',
                                    ])
                                    ->searchable()
                                    ->required(),

                                Select::make('municipio')
                                    ->label('Municipio')
                                    ->options([
                                        'san_salvador' => 'San Salvador',
                                        'soyapango' => 'Soyapango',
                                    ])
                                    ->searchable()
                                    ->required(),

                                Select::make('distrito')
                                    ->label('Distrito')
                                    ->options([
                                        'centro' => 'Centro',
                                        'norte' => 'Norte',
                                        'sur' => 'Sur',
                                    ])
                                    ->searchable()
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
