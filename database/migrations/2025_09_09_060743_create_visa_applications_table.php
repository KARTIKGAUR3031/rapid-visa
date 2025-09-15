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
        Schema::create('visa_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('country');
            $table->text('image');
            $table->string('full_name');
            $table->string('email');
            $table->string('gender');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('passport_number');
            $table->date('passport_valid_till');
            $table->string('passport_place_of_issue');
            $table->string('aadhaar_card');
            $table->string('passport_back');
            $table->string('flight_ticket');
            $table->string('old_visa')->nullable();
            $table->string('passport_front');
            $table->string('passport_photo')->nullable();
            $table->string('hotel_booking');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_applications');
    }
};