<?php

namespace App\Billing;

// An interface is simply a road map of how a class needs to be constructed.

interface PaymentGatewayContract
{
    public function setDiscount($amount);
    public function charge($amount);
}