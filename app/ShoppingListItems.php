<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingListItems extends Model
{
    protected $fillable = [
        'shopping_list_id',
        'user_id',
        'name',
        'description',
        'price',
        'amount',
        'weight',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
