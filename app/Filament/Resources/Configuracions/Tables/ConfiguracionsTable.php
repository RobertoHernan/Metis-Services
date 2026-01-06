<?php

namespace App\Filament\Resources\Configuracions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ConfiguracionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')
                    ->label('Logo')
                    ->disk('public')
                    ->height(40)
                    ->width(40)
                    ->circular()
                    ->defaultImageUrl(url('/images/placeholder-logo.png')),

                TextColumn::make('nombre')
                    ->label('Empresa')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('actividad_comercial')
                    ->label('Actividad comercial')
                    ->wrap()
                    ->limit(30),

                TextColumn::make('nrc')
                    ->label('NRC')
                    ->searchable(),

                TextColumn::make('nit')
                    ->label('NIT')
                    ->searchable(),

                TextColumn::make('telefono')
                    ->label('Teléfono')
                    ->icon('heroicon-o-phone'),

                TextColumn::make('correo_electronico')
                    ->label('Correo')
                    ->icon('heroicon-o-envelope')
                    ->copyable()
                    ->copyMessage('Correo copiado'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
