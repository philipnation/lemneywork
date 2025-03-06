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
        Schema::create('partnerships', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('surname');
            $table->string('listing_type');
            $table->string('middle_name');
            $table->string('business_name');
            $table->string('business_type');
            $table->string('business_address');
            $table->string('phone_number');
            $table->string('years_of_experience');
            $table->string('email');
            $table->string('working_days');
            $table->string('working_location');
            $table->string('state');
            $table->string('lga');
            $table->string('additional_description');
            $table->string('image');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnerships');
    }
};
