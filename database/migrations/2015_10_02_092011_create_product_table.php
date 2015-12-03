<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id');
            $table->integer('brand_id');
            $table->string('image_name');
            $table->string('product_name', 60);
            $table->integer('qty');
            $table->integer('price');
            $table->integer('discount');
            $table->boolean('show');
            $table->boolean('feature');
            $table->text('description');
            $table->string('slug')->unique();
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
        Schema::drop('product');
    }
}
