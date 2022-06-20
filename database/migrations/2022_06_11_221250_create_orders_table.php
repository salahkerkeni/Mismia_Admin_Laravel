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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id_order')->startingValue('1253000')->autoIncrement();
            $table->string('validation_number', 5);
            $table->json('destination_address');
            $table->string('clients_email');
            $table->json('produts');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('clients_email')
                ->references('email')
                ->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
