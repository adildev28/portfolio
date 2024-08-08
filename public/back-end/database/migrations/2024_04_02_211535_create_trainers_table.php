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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->integer('experience_years')->default(1);
            $table->string('speciality');
            $table->string('elevage_name', 100)->nullable();
            $table->string('city', 20);
            $table->string('address', 60);
            $table->string('Mobility')->default(false);
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
