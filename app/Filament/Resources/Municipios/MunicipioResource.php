<?php

namespace App\Filament\Resources\Municipios;

use App\Filament\Resources\Municipios\Pages\ListMunicipios;
use App\Models\Municipio;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class MunicipioResource extends Resource
{
    protected static ?string $model = Municipio::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-map';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 5;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Código'),

                TextColumn::make('name')
                    ->label('Municipio'),

                IconColumn::make('active')
                    ->label('Activo')
                    ->boolean(),
            ])
            ->recordActions([])   
            ->toolbarActions([]); 
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMunicipios::route('/'),
        ];
    }
}
