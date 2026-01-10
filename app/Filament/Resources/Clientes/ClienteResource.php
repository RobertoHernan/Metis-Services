<?php

namespace App\Filament\Resources\Clientes;

use App\Filament\Resources\Clientes\Pages\CreateCliente;
use App\Filament\Resources\Clientes\Pages\EditCliente;
use App\Filament\Resources\Clientes\Pages\ListClientes;
use App\Filament\Resources\Clientes\Schemas\ClienteForm;
use App\Filament\Resources\Clientes\Tables\ClientesTable;
use App\Models\Cliente;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-users';
    protected static UnitEnum|string|null $navigationGroup = 'Operación';
    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return ClienteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListClientes::route('/'),
            'create' => CreateCliente::route('/create'),
            'edit'   => EditCliente::route('/{record}/edit'),
        ];
    }
}
