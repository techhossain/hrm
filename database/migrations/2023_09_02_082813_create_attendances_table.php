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
            $table->foreignId('department_id');
            $table->foreignId('employee_id');
            $table->string('location');
            $table->string('attentance_by');
            $table->integer('year');
            $table->string('month');
            $table->string('clock_in_time');
            $table->string('clock_out_time');
            $table->boolean('late');
            $table->boolean('half_day');
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
