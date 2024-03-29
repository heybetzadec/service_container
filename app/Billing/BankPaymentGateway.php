<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract
{

    private $currency;
    private $discount = 0;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount ($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        // Charge the bank
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }
}
