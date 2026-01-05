<?php

namespace App\Filament\Resources\Clientes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClientesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cliente')
                    ->label('Cliente')
                    ->getStateUsing(fn ($record) => "{$record->nombre} {$record->apellido}")
                    ->searchable(['nombre', 'apellido'])
                    ->sortable(),
            
                TextColumn::make('dui')
                    ->label('DUI')
                    ->searchable(),
            
                TextColumn::make('telefono')
                    ->label('Teléfono')
                    ->searchable(),
            
                TextColumn::make('correo_electronico')
                    ->label('Correo')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Correo copiado'),
            
                TextColumn::make('municipio')
                    ->label('Municipio'),
            
                TextColumn::make('distrito')
                    ->label('Distrito'),
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
