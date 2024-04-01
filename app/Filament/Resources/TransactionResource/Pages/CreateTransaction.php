<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Credit;
use Carbon\Carbon;

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;

    protected function afterSave(): void
    {
        $transaction = $this->getRecord();
       dd($tranaction);
        $due = Carbon::parse($transaction->created_at)->addDays(30);
        if($transaction->mop == 'Credit'){
            $credit = new Credit;
            $credit->name = $transaction->name;
            $credit->email = $transaction->notes;
            $credit->number = $transaction->number;
            $credit->amount = $transaction->php_amount;
            $credit->due = $due;
            $credit->status = 'Unpaid';
            $credit->save();

        }

    }
}
