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
        Schema::create('image_avis', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('avis_id');
            $table->string('product_name');
            $table->string('client_email');
            $table->timestamps();

            $table->foreign('client_email')
                ->references('email')->on('clients');
            $table->foreign('product_name')
                ->references('product_name')
                ->on('products');
            $table->foreign('avis_id')
                ->references('id')
                ->on('avis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_avis');
    }
};
