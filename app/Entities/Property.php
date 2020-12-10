<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'product_id', 'property_type_id', 'value'
    ];

    public function property_type() {
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope('getPropertyName', function (Builder $builder) {
            $builder->with('property_type');
        });
    }
}
