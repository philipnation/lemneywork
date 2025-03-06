<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
    protected $table = 'honeyorders';

    protected $fillable = ['orderno', 'saved', 'userid', 'receipient_name', 'receipient_state', 'receipient_pickup_address', 'receipient_lga', 'quantity_type', 'quantity', 'payment', 'price', 'phone', 'date', 'status'];
}
