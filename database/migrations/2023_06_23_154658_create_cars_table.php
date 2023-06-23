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
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            // login at should not be null when creating a new car is entering
            $table->datetime('login_at');
            // logout can be nullable because the car already entered but may be didn't get out yet so when the car gets out I will log the current time when it's getting out.
            $table->datetime('logout_at')->nullable();
            // total is the difference between login_at and logout_at in minutes
            $table->integer('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
