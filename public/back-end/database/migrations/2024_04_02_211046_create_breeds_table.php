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
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('temperament', 300)->nullable();
            $table->string('origin', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('weight', 20)->nullable();
            $table->string('length', 20)->nullable();
            $table->string('skin_type', 30)->nullable();
            $table->string('color', 20)->nullable();
            $table->string('life_span', 255)->nullable();
            $table->string('diet', 50)->nullable();
            $table->string('gestation_period', 50)->nullable();
            $table->string('age_of_sexual_maturity', 20)->nullable();
            $table->string('age_of_weaning', 20)->nullable();
            $table->string('most_distinctive_feature', 350)->nullable();
            $table->json('alt_names', 300)->nullable();
            $table->integer('adaptability')->nullable();
            $table->integer('child_friendly')->nullable();
            $table->integer('energy_level')->nullable();
            $table->integer('health_issues')->nullable();
            $table->integer('intelligence')->nullable();
            $table->integer('social_needs')->nullable();
            $table->integer('stranger_friendly')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
