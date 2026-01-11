<?php

namespace App\Filament\Resources\ActividadEconomicas;

use App\Filament\Resources\ActividadEconomicas\Pages\ListActividadEconomicas;
use App\Models\ActividadEconomica;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class ActividadEconomicaResource extends Resource
{
    protected static ?string $model = ActividadEconomica::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-briefcase';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Código')
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Actividad económica')
                    ->searchable(),

                IconColumn::make('active')
                    ->label('Activo')
                    ->boolean(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListActividadEconomicas::route('/'),
        ];
    }
}
