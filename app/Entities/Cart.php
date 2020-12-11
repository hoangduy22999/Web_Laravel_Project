<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'promotion_id'
    ];
}
