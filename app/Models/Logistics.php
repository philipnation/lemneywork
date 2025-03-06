<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logistics extends Model
{
    protected $table = 'logistics';

    protected $fillable = ['userid', 'saved', 'sender_name', 'sender_pickup_address', 'sender_phone', 'pickup_date', 'receipient_name', 'receipient_state', 'receipient_pickup_address', 'receipient_lga', 'receipient_phone', 'goods_type', 'delivery_type', 'description', 'date', 'status'];
}
