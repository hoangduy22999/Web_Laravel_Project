<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'product_id', 'property_type_id', 'value'
    ];

    public function property_type() {
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }
}
