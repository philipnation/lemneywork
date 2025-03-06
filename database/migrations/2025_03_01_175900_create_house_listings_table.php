<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('house_listings', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('description');
            $table->string('listing_type');
            $table->string('property_name');
            $table->string('property_type');
            $table->string('property_condition');
            $table->string('house_age');

            $table->string('size');
            $table->string('price');
            $table->string('no_of_bedrooms');
            $table->string('no_of_bathrooms');
            $table->string('parking_space');
            $table->string('furnishing');
            $table->string('negotiable');
            $table->string('additional_description');

            $table->string('location');
            $table->string('lga');
            $table->string('state');
            $table->string('contact_name');
            $table->string('contact_role');
            $table->string('contact_phone');
            $table->string('profile_picture');


            $table->string('status')->default('pending');
            $table->string('slug');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_listings');
    }
};
