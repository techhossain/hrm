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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->time('clock_in_time');
            $table->ipAddress('clock_in_ip');
            $table->time('clock_out_time');
            $table->ipAddress('clock_out_ip');
            $table->boolean('late');
            $table->boolean('half_day');
            $table->string('location');
            $table->string('work_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
