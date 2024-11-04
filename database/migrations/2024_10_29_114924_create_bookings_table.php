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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to users table
            $table->foreignId('schedule_id')->constrained()->onDelete('cascade'); // Reference to schedules table
            $table->foreignId('seat_id')->constrained()->onDelete('cascade'); // Reference to seats table 
            $table->enum('class', ['economy', 'business', 'executive']);  // Menyimpan kelas yang dipilih
            $table->decimal('total_amount', 10, 2);
            $table->string('status');
            $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade'); // Reference to admins table
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

  