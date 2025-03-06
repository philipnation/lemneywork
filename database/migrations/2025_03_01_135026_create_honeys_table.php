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
        Schema::create('honeyorders', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('receipient_name');
            $table->string('receipient_state');
            $table->string('receipient_pickup_address');
            $table->string('receipient_lga');
            $table->string('quantity_type');
            $table->string('quantity');
            $table->string('phone');
            $table->string('date');
            $table->string('status');
            $table->string('payment');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('honeys');
    }
};
