<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accountdetail extends Model
{
    protected $table = 'accountdetails';

    protected $fillable = [
        'accountname',
        'accountnumber',
        'bankname',
    ];
}
