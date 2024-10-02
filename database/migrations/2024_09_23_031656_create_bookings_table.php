<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('event_type');
            $table->string('custom_event_type')->nullable(); // For "Other" event type
            $table->date('event_date');
            $table->string('location');
            $table->unsignedBigInteger('menu_package_id');
            $table->unsignedBigInteger('music_package_id');
            $table->unsignedBigInteger('decoration_package_id');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
