<?php

namespace App\Filament\Resources\Configuracions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ConfiguracionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información General')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('nombre')
                                    ->label('Nombre de la empresa')
                                    ->required(),

                                TextInput::make('nit')
                                    ->label('NIT')
                                    ->required(),

                                TextInput::make('nrc')
                                    ->label('NRC')
                                    ->required(),

                                TextInput::make('actividad_comercial')
                                    ->label('Actividad Comercial')
                                    ->required(),

                                TextInput::make('telefono')
                                    ->label('Teléfono')
                                    ->tel()
                                    ->required(),

                                TextInput::make('correo_electronico')
                                    ->label('Correo electrónico')
                                    ->email()
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

                                Select::make('distrito')
                                    ->label('Distrito')
                                    ->options([
                                        'centro' => 'Centro',
                                        'norte' => 'Norte',
                                        'sur' => 'Sur',
                                    ])
                                    ->searchable()
                                    ->required(),

                                TextInput::make('direccion')
                                    ->label('Dirección')
                                    ->placeholder('Ej. Col. Escalón, San Salvador')
                                    ->columnSpanFull()
                                    ->required(),
                            ]),
                    ]),

                Section::make('Identidad visual')
                    ->description('Logo que se mostrará en documentos y reportes')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Logo de la empresa')
                            ->image()
                            ->imageEditor()
                            ->directory('empresas/logos')
                            ->disk('public')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp'])
                            ->helperText('PNG, JPG o WEBP · Máx. 2MB')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
