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
        Schema::create('description_products', function (Blueprint $table) {
            $table->id();
            $table->string('detail_description');
            $table->string('sous_detail_description');
            $table->string('description_description_name');
            $table->string('products_product_name');
            $table->timestamps();
            $table->foreign('description_description_name')->references('description_name')->on('descriptions')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('products_product_name')->references('product_name')->on('products')
                ->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions_products');
    }
};
