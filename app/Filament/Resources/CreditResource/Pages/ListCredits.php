<?php

namespace App\Filament\Resources\CreditResource\Pages;

use App\Filament\Resources\CreditResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCredits extends ListRecords
{
    protected static string $resource = CreditResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
