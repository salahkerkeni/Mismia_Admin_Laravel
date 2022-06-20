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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('product_name');
            $table->string('client_email');
            $table->unsignedBigInteger('rating_star');
            $table->timestamps();

            $table->foreign('client_email')
                ->references('email')->on('clients');
            $table->foreign('product_name')
                ->references('product_name')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avis');
    }
};
