<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number',
        'customer_id',
        'plan_id',
        'invoice_date',
        'amount',
        'issue_date',
        'due_date',
        'status',
    ];

    protected $casts = [
        'invoice_date' => 'datetime',
        'issue_date' => 'datetime',
        'due_date' => 'datetime',
    ];
    
    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }
}
