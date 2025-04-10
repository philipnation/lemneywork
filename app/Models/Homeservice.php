<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeservice extends Model
{
    protected $table = 'homeservices';

    protected $fillable = ['orderno', 'saved', 'userid', 'pay', 'image', 'receipient_name', 'receipient_state', 'receipient_lga', 'service_location', 'service', 'phone', 'date', 'time', 'status'];
}
