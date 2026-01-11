<?php

namespace App\Filament\Resources\Receptores;

use App\Filament\Resources\Receptores\Pages\CreateReceptor;
use App\Filament\Resources\Receptores\Pages\EditReceptor;
use App\Filament\Resources\Receptores\Pages\ListReceptores;
use App\Filament\Resources\Receptores\Schemas\ReceptorForm;
use App\Models\Receptor;
use BackedEnum;
use UnitEnum;
use Filament\Actions\EditAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class ReceptorResource extends Resource
{
    protected static ?string $model = Receptor::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-user';
    protected static UnitEnum|string|null $navigationGroup = 'Operación';
    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Receptores';
    protected static ?string $pluralModelLabel = 'Receptores';
    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return ReceptorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre')
                    ->label('Nombre')
                    ->searchable(),

                TextColumn::make('documento')
                    ->label('Documento'),

                IconColumn::make('active')
                    ->label('Activo')
                    ->boolean(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListReceptores::route('/'),
            'create' => CreateReceptor::route('/create'),
            'edit'   => EditReceptor::route('/{record}/edit'),
        ];
    }
}
