<?php

namespace App\Filament\Resources\UnidadMedidas;

use App\Filament\Resources\UnidadMedidas\Pages\CreateUnidadMedida;
use App\Filament\Resources\UnidadMedidas\Pages\EditUnidadMedida;
use App\Filament\Resources\UnidadMedidas\Pages\ListUnidadMedidas;
use App\Filament\Resources\UnidadMedidas\Schemas\UnidadMedidaForm;
use App\Filament\Resources\UnidadMedidas\Tables\UnidadMedidasTable;
use App\Models\UnidadMedida;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class UnidadMedidaResource extends Resource
{
    protected static ?string $model = UnidadMedida::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-scale';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return UnidadMedidaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UnidadMedidasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListUnidadMedidas::route('/'),
            'create' => CreateUnidadMedida::route('/create'),
            'edit'   => EditUnidadMedida::route('/{record}/edit'),
        ];
    }
}
