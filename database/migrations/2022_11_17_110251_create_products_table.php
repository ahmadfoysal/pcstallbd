<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
             $table->string('title')->nullable();
             $table->string('features')->nullable();
             $table->string('description')->nullable();
             $table->integer('price')->nullable();
             $table->integer('stock')->nullable();
             $table->integer('category_id')->nullable();
             $table->integer('slag')->nullable();
             $table->string('user_id')->nullable();
             $table->string('image_1')->nullable();
             $table->string('image_2')->nullable();
             $table->string('image_3')->nullable();
             $table->string('image_4')->nullable();
             $table->string('image_5')->nullable();
             $table->softDeletes();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
