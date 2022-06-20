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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('client_email');
            $table->unsignedBigInteger('quantity')->default(1);
            $table->string('colors_products_products_product_name');
            $table->string('colors_products_colors_color_name');
            $table->timestamps();

            $table->foreign('client_email')->references('email')->on('clients')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('colors_products_products_product_name')
                ->references('products_product_name')->on('colors_products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('colors_products_colors_color_name')
                ->references('colors_color_name')->on('colors_products')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
