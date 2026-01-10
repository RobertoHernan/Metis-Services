<?php

namespace App\Filament\Resources\Servicios\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;

class ServiciosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('codigo')
                    ->label('Código')
                    ->searchable(),

                TextColumn::make('nombre')
                    ->label('Nombre')
                    ->searchable(),

                TextColumn::make('tipoDeItem.name')
                    ->label('Tipo de ítem'),

                TextColumn::make('precio_base')
                    ->label('Precio')
                    ->money('USD'),

                IconColumn::make('active')
                    ->label('Activo')
                    ->boolean(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
                    ->requiresConfirmation(),
            ]);
    }
}
