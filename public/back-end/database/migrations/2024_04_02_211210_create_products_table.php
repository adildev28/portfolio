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
        Schema::create('products', function (Blueprint $table) {
            // 	category	description	name	price	categoryID
            $table->id();
            $table->string('name',50);
            $table->text('description',300);
            $table->float('price');
            $table->bigInteger('categoryID');
            $table->bigInteger('SubCategory_id');
            $table->string('product_image',100);
            $table->string('second_image',100)->nullable();
            $table->integer('demands');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
