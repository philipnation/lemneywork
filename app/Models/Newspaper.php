<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    protected $table = 'newspapers';

    protected $fillable = ['email', 'status'];
}
