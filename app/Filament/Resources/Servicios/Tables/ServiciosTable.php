<?php

namespace App\Filament\Resources\Servicios\Tables;

use Filament\Tables\Columns\BadgeColumn;
use Filament\Schemas\Schema;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServiciosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->label('Servicio')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('categoria.nombre')
                    ->label('Categoría')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('unidadMedida.nombre')
                    ->label('Unidad de medida')
                    ->sortable()
                    ->toggleable(),
                BadgeColumn::make('activo')
                    ->label('Estado')
                    ->colors([
                        'success' => true,
                        'danger' => false,
                    ])
                    ->formatStateUsing(fn (bool $state) => $state ? 'Activo' : 'Inactivo'),
                TextColumn::make('precio')
                    ->label('Precio')
                    ->money('USD')
                    ->sortable(),    
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
