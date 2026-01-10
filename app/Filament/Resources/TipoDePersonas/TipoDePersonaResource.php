<?php

namespace App\Filament\Resources\TipoDePersonas;

use App\Filament\Resources\TipoDePersonas\Pages\ListTipoDePersonas;
use App\Models\TipoDePersona;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class TipoDePersonaResource extends Resource
{
    protected static ?string $model = TipoDePersona::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-identification';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('code')
                    ->label('Código'),

                \Filament\Tables\Columns\TextColumn::make('name')
                    ->label('Nombre'),

                \Filament\Tables\Columns\IconColumn::make('active')
                    ->label('Activo')
                    ->boolean(),
            ])
            ->recordActions([])       
            ->toolbarActions([]);     
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTipoDePersonas::route('/'),
        ];
    }
}
