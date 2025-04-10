<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteVisits extends Model
{
    protected $table = 'website_visits';
    protected $fillable = ['ip_address', 'user_agent', 'visit_time'];
}
