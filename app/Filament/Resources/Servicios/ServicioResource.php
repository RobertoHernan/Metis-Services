<?php

namespace App\Filament\Resources\Servicios;

use App\Filament\Resources\Servicios\Pages\CreateServicio;
use App\Filament\Resources\Servicios\Pages\EditServicio;
use App\Filament\Resources\Servicios\Pages\ListServicios;
use App\Filament\Resources\Servicios\Schemas\ServicioForm;
use App\Filament\Resources\Servicios\Tables\ServiciosTable;
use App\Models\Servicio;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ServicioResource extends Resource
{
    protected static ?string $model = Servicio::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-briefcase';
    protected static UnitEnum|string|null  $navigationGroup = 'Gestión Comercial';
    protected static ?int                 $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ServicioForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiciosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicios::route('/'),
            'create' => CreateServicio::route('/create'),
            'edit' => EditServicio::route('/{record}/edit'),
        ];
    }
}
