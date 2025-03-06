<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HouseListing extends Model
{
    protected $table = 'house_listings';

    protected $fillable = ['userid', 'saved', 'description', 'listing_type', 'property_name', 'property_type', 'property_condition', 'house_age', 'size', 'price', 'no_of_bedrooms', 'no_of_bathrooms', 'parking_space', 'furnishing', 'negotiable', 'additional_description', 'location', 'lga', 'state', 'contact_name', 'contact_role', 'contact_phone', 'profile_picture', 'status', 'slug', 'images'];
}
