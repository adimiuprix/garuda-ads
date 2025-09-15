<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'plan_products');
    }
}
