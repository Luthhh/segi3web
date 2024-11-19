<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('plat_no', 20);
            $table->string('motor_brand', 100);
            $table->string('motor_type', 100);
            $table->string('service_type', 100);
            $table->date('booking_date');
            $table->time('booking_time');
            $table->text('notes')->nullable();
            $table->enum('status', ['Pending', 'Confirmed', 'Canceled'])->default('Pending');
            $table->string('phone', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
