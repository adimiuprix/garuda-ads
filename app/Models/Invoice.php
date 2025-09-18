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
}
