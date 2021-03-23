<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use Illuminate\Http\Request;


class PaymentMethodController extends Controller
{
    public function index(Request  $request)
    {
        $paymentMethods = PaymentMethod::query();

        $paymentMethods = $paymentMethods->get();

        return view('system.payment-method.index',compact($paymentMethods));
    }
}
