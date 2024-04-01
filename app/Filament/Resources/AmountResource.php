<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmountResource\Pages;
use App\Filament\Resources\AmountResource\RelationManagers;
use App\Models\Amount;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmountResource extends Resource
{
    protected static ?string $model = Amount::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Load';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('baht')
                    ->required(),
                Forms\Components\TextInput::make('peso')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('baht'),
                Tables\Columns\TextColumn::make('peso'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAmounts::route('/'),
            'create' => Pages\CreateAmount::route('/create'),
            'edit' => Pages\EditAmount::route('/{record}/edit'),
        ];
    }    
}
