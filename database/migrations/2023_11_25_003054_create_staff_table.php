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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('UID');
            $table->string('initial');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('email');
            $table->string('password');
            $table->string('employment_type');
            $table->string('address');
            $table->integer('postcode');
            $table->integer('phone_no');
            $table->string('shift_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
