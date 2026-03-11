<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'requester_name',
        'requester_email',
        'quote_details',
        'status',
    ];

    // Add any additional methods or relationships needed for this model
}
