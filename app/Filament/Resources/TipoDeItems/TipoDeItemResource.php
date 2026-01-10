<?php

namespace App\Filament\Resources\TipoDeItems;

use App\Filament\Resources\TipoDeItems\Pages\CreateTipoDeItem;
use App\Filament\Resources\TipoDeItems\Pages\EditTipoDeItem;
use App\Filament\Resources\TipoDeItems\Pages\ListTipoDeItems;
use App\Filament\Resources\TipoDeItems\Schemas\TipoDeItemForm;
use App\Filament\Resources\TipoDeItems\Tables\TipoDeItemsTable;
use App\Models\TipoDeItem;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class TipoDeItemResource extends Resource
{
    protected static ?string $model = TipoDeItem::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-tag';
    protected static UnitEnum|string|null $navigationGroup = 'Catálogos';
    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TipoDeItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TipoDeItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListTipoDeItems::route('/'),
            'create' => CreateTipoDeItem::route('/create'),
            'edit'   => EditTipoDeItem::route('/{record}/edit'),
        ];
    }
}
