<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seller_id')->unsigned();
            $table->integer('buyer_id')->unsigned()->nullable();
            $table->string('status');
            $table->integer('brand_id')->unsigned();
            $table->string('notes')->nullable();
            $table->integer('km');
            $table->integer('first_bid');
            $table->dateTime('end_date');
            $table->date('year');
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('buyer_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
