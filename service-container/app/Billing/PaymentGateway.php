<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function charge($amount)
    {
        //Charge the bank

        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
        ];
    }
}