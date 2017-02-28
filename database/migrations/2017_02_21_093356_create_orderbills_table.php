<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderbillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderbills', function (Blueprint $table) {
            $table->increments('billno');
            $table->integer('cusid')->unsigned();
            $table->foreign('cusid')->references('cusid')->on('custormers');
            $table->date('datein');
            $table->date('dateout');
            $table->integer('days');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('reservationid')->unsigned();
            $table->foreign('reservationid')->references('reservationid')->on('roomreservations');
           
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
        Schema::dropIfExists('orderbills');
    }
}
