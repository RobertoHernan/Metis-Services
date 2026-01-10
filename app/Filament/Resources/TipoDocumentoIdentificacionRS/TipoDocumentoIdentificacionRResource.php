<?php

namespace App\Filament\Resources\TipoDocumentoIdentificacionRs;

use App\Filament\Resources\TipoDocumentoIdentificacionRs\Pages\ListTipoDocumentoIdentificacionRs;
use App\Models\TipoDocumentoIdentificacionR;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class TipoDocumentoIdentificacionRResource extends Resource
{
    protected static ?string $model = TipoDocumentoIdentificacionR::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-identification';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code')
                    ->label('Código'),

                TextColumn::make('name')
                    ->label('Nombre'),

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
            'index' => ListTipoDocumentoIdentificacionRs::route('/'),
        ];
    }
}
