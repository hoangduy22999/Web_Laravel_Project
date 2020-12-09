<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title', 'category_id', 'image', 'value', 'price', 'status'
    ];

    public function quantity() {
        return $this->hasOne(Warehouse::class, 'product_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function properties() {
        return $this->hasMany(Property::class, 'product_id', 'id');
    }
}
