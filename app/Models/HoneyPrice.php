<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoneyPrice extends Model
{
    protected $table = 'honey_prices';

    protected $fillable = [
        'name',
        'price',
        'dprice',
        'status',
    ];
}
