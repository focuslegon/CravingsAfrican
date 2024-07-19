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
        Schema::create('food_item_categories', function (Blueprint $table) {

            $table->unsignedBigInteger('food_item_id');
            $table->unsignedBigInteger('category_id');
            
            $table->foreign('food_item_id')
            ->references('id') 
            ->on('food_items')
            ->onDelete('cascade');

            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

            $table->primary(['food_item_id', 'category_id']);       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_item_categories');
    }
};
