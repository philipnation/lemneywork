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
        Schema::create('homeservices', function (Blueprint $table) {
            $table->id();
            $table->string('orderno');
            $table->string('receipient_name');
            $table->string('receipient_state');
            $table->string('receipient_lga');
            $table->string('service_location');
            $table->string('service');
            $table->string('phone');
            $table->string('date');
            $table->string('time');
            $table->string('userid');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeservices');
    }
};
