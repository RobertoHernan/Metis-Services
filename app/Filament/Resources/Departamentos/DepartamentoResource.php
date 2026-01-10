<?php

namespace App\Filament\Resources\Departamentos;

use App\Filament\Resources\Departamentos\Pages\ListDepartamentos;
use App\Models\Departamento;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class DepartamentoResource extends Resource
{
    protected static ?string $model = Departamento::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-building-office-2';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 6;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Código'),

                TextColumn::make('name')
                    ->label('Departamento'),

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
            'index' => ListDepartamentos::route('/'),
        ];
    }
}
