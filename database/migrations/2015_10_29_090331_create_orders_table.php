<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->String('sity');
            $table->String('province');
            $table->String('postcode');
            $table->String('street1');
            $table->String('street2');
            $table->String('firstname');
            $table->String('lastname');
            $table->integer('phone');
            $table->String('email');
            $table->String('shipping_method');
            $table->String('payment');
            $table->integer('total_price');
            $table->integer('card_number');
            $table->boolean('status')->default(false);
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
        Schema::drop('orders');
    }
}
