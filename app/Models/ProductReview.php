<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $table = 'product_reviews';

    protected $fillable = ['userid', 'rating', 'comment', 'email', 'status', 'name'];
}
