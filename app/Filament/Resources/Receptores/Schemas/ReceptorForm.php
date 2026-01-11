<?php

namespace App\Filament\Resources\Receptores\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ReceptorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // =========================
            // DATOS GENERALES
            // =========================
            Section::make('Datos generales')
                ->columnSpanFull()
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('nombre')
                            ->label('Nombre / Razón social')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('correo')
                            ->label('Correo electrónico')
                            ->email()
                            ->maxLength(255),
                    ]),
                ]),

            // =========================
            // IDENTIFICACIÓN FISCAL
            // =========================
            Section::make('Identificación fiscal')
                ->columnSpanFull()
                ->schema([
                    Grid::make(2)->schema([
                        Select::make('tipo_de_persona_code')
                            ->label('Tipo de persona')
                            ->relationship('tipoDePersona', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('tipo_de_documento_code')
                            ->label('Tipo de documento')
                            ->relationship('tipoDeDocumento', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('documento')
                            ->label('Número de documento')
                            ->maxLength(255),

                        TextInput::make('nrc')
                            ->label('NRC')
                            ->maxLength(255),
                    ]),
                ]),

            // =========================
            // ACTIVIDAD ECONÓMICA
            // =========================
            Section::make('Actividad económica')
                ->columnSpanFull()
                ->schema([
                    Grid::make(1)->schema([
                        TextInput::make('actividad_economica')
                            ->label('Actividad económica')
                            ->maxLength(255),

                        TextInput::make('descripcion_actividad_economica')
                            ->label('Descripción de la actividad económica')
                            ->maxLength(255),
                    ]),
                ]),

            // =========================
            // UBICACIÓN Y CONTACTO
            // =========================
            Section::make('Ubicación y contacto')
                ->columnSpanFull()
                ->schema([
                    Grid::make(2)->schema([
                        Select::make('municipio_code')
                            ->label('Municipio')
                            ->relationship('municipio', 'name')
                            ->searchable()
                            ->preload(),

                        TextInput::make('telefono')
                            ->label('Teléfono')
                            ->maxLength(255),

                        TextInput::make('direccion')
                            ->label('Dirección')
                            ->columnSpanFull()
                            ->maxLength(255),
                    ]),
                ]),

            // =========================
            // ESTADO
            // =========================
            Section::make('Estado')
                ->columnSpanFull()
                ->schema([
                    Toggle::make('active')
                        ->label('Activo')
                        ->default(true),
                ]),
        ]);
    }
}
