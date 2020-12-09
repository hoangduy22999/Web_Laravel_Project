<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table = 'property_types';

    protected $fillable = [
        'category_id', 'property_name', 'filterable', 'sort'
    ];
}
