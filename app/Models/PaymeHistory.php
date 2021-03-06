<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymeHistory extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'token',
        'number',
        'expire',
        'payment_id',
        'status'
    ];
}
