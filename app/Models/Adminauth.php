<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adminauth extends Model
{
    protected $table = 'adminauths';

    protected $fillable = ['email', 'password', 'status'];
}
