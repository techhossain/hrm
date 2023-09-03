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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('designation_id');
            $table->foreignId('department_id');
            $table->foreignId('country_id')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->date('joining_date');
            $table->date('birth_date')->nullable();
            $table->integer('reporting_to')->nullable();
            $table->foreignId('language_id')->nullable();
            $table->string('address')->nullable();
            $table->string('about')->nullable();
            $table->boolean('login_permission')->nullable();
            $table->boolean('notification_permission')->nullable();
            $table->double('hourly_rate')->nullable();
            $table->string('slack_username')->nullable();
            $table->string('skills')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
