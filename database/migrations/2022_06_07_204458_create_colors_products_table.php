<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_products', function (Blueprint $table) {
//            $table->integer('id');
            $table->string('image_name');
            $table->integer('order');
            $table->string('size', 4);
            $table->unsignedInteger('quantity');

            $table->string('products_product_name');
            $table->string('colors_color_name');

            $table->primary(['image_name','size', 'products_product_name', 'colors_color_name'],'my_primary_index');

            $table->timestamps();
            $table->foreign('colors_color_name')->references('color_name')->on('colors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('products_product_name')->references('product_name')->on('products')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};
