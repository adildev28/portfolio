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
        Schema::create('veterinarians', function (Blueprint $table) {
            // user_id	clinic_name	speciality	address	phone	
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('experience')->default(1);
            $table->string('clinic_name');
            $table->string('speciality');
            $table->string('address', 100);
            $table->string('phone');
            $table->string('mobility')->default('true');
            $table->string('city',50);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarians');
    }
};
