<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $table = 'partnerships';


    protected $fillable = ['userid', 'surname', 'saved', 'listing_type', 'middle_name', 'business_name', 'business_type', 'business_address', 'phone_number', 'years_of_experience', 'email', 'working_days', 'working_location', 'state', 'lga', 'additional_description', 'image', 'status'];
}
