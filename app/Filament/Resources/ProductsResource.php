<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\FileUpload::make('image')
                    ->maxSize(10024)
                    ->required()
                    ->preserveFilenames()
                    ->image(),
                    Forms\Components\Select::make('type')
                    ->options([
                        'Pocket Wifi' => 'Pocket Wifi',
                        'Sim cards' => 'Sim cards',
                        'Top Up/load' => 'Top up/load',
                    ]),
                    
                    Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
                    Forms\Components\TextInput::make('shopUrl')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Toggle::make('isReaload')->inline(false),
                ])->columns(3),
                Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\RichEditor::make('details'),
                ])->columns(1),
                Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\TextInput::make('countries')
                    ->required(), 
                    Forms\Components\TextInput::make('notes')
                    ->required(), 
                ])->columns(2),
                Forms\Components\Grid::make()
                ->schema([
                    Forms\Components\TextInput::make('packages')
                    ->required(), 
                    Forms\Components\TextInput::make('top_up')
                    ->required(), 
                    Forms\Components\TextInput::make('mop')
                    ->required(), 
                ])->columns(3),
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('price'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }    
}
