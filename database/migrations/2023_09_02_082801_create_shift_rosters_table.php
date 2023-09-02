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
        Schema::create('shift_rosters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id');
            $table->foreignId('employee_id');
            $table->foreignId('shift_id');
            $table->string('shift_by');
            $table->string('shift_dates');
            $table->boolean('email_permission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift_rosters');
    }
};
