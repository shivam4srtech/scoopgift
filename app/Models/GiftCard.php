<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'code',
        'amount',
        'balance',
        'usage_limit',
        'used_count',
        'status',
        'expires_at',
    ];

    protected $casts = [
        'expires_at' => 'date',
        'amount' => 'decimal:2',
        'balance' => 'decimal:2',
    ];
}
