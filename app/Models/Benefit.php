<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = ['name'];

    public function plans()
    {
        return $this->belongsToMany(Plan::class, 'benefit_plan')->withTimestamps();
    }
}
