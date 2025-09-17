<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'price'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'plan_products');
    }

    public function benefits()
    {
        return $this->belongsToMany(Benefit::class, 'benefit_plans')->withTimestamps();
    } 
}
