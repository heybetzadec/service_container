<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDeatails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDeatails $orderDetails, PaymentGatewayContract $paymentGateway)
    {
//        $paymentGateway = new PaymentGateway('usd');
        $order = $orderDetails->all();
        dd($paymentGateway->charge(2500));
    }
}
