<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificaton extends Model
{
    protected $table = 'notificatons';

    protected $fillable = ['userid', 'title', 'message', 'time', 'date', 'service', 'serviceid'];
}
