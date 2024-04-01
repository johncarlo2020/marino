<?php

namespace App\Filament\Resources\ShiftResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Credit;
use Carbon\Carbon;
class TransactionsRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('baht_amount')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('php_amount')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('mop')
                    ->label('Mode of Payment')
                    ->options([
                        'Casg'   => 'Cash',
                        'GCASH'   => 'GCASH',
                        'BDO'   => 'BDO',
                        'BPI'   => 'BPI',
                        'Credit'   => 'Credit',

                    ]),
                Forms\Components\TextInput::make('or')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('notes')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('baht_amount'),
                Tables\Columns\TextColumn::make('php_amount'),
                Tables\Columns\TextColumn::make('mop'),
                Tables\Columns\TextColumn::make('or'),
                Tables\Columns\TextColumn::make('notes'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->before(function (array $data) {
                    $currentDate = Carbon::now();
                    $dateIn30Days = $currentDate->addDays(30);
                    if($data['mop'] == 'Credit'){
                        $credit = new Credit;
                        $credit->name = $data['name'];
                        $credit->email = $data['notes'];
                        $credit->number = $data['number'];
                        $credit->amount = $data['php_amount'];
                        $credit->due = $dateIn30Days;
                        $credit->status = 'Unpaid';
                        $credit->save();
                    }
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
