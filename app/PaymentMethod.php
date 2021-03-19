<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use softDeletes;

    protected $primaryKey = 'id';

    protected $table = 'payment_methods';

    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
