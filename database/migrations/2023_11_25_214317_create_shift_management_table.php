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
        Schema::create('shift_management', function (Blueprint $table) {
            $table->id();
            $table->integer('assigned_by');
            $table->integer('staff_id');
            $table->string('shift_date');
            $table->string('shift_start_time');
            $table->string('shift_end_time');
            $table->double('hourly_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_management');
    }
};
