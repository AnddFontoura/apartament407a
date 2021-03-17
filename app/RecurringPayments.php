<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecurringPayments extends Model
{
    protected $table = 'recurrent_payments';

    protected $fillable = [
        'name',
        'description',
        'due_date',
        'price',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'expires_at',
    ];
}
