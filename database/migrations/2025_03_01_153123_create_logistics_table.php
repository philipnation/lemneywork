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
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userid');
            $table->string('sender_name');
            $table->string('sender_pickup_address');
            $table->string('sender_phone');
            $table->string('pickup_date');

            $table->string('receipient_name');
            $table->string('receipient_state');
            $table->string('receipient_pickup_address');
            $table->string('receipient_lga');
            $table->string('receipient_phone');

            $table->string('goods_type');
            $table->string('delivery_type');
            $table->string('description');
            $table->date('date');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logistics');
    }
};
