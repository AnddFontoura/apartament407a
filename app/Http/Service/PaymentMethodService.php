<?php

namespace App\Http\Service;

use App\PaymentMethod;

class PaymentMethodService
{

    static function countPaymentMethodRegistered(): int
    {
        return PaymentMethod::withTrashed()->count();
    }

    static function countPaymentMethodWithoutDeleted(): int
    {
        return PaymentMethod::count();
    }
}
