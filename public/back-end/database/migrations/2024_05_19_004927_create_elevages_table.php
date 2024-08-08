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
        Schema::create('elevages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->integer('years')->default(1);
            $table->string('elevage_name');
            $table->string('speciality')->nullable();
            $table->string('address', 100);
            $table->string('city',50);
            $table->string('space',20);
            $table->integer('number_animals');
            $table->string('url',400);
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elevages');
    }
};
