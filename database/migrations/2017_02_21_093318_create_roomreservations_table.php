<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomreservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomreservations', function (Blueprint $table) {
            
            $table->increments('reservationid');
            $table->date('date');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('day');
            $table->integer('totalprice');
            $table->integer('cusid')->unsigned();
            $table->foreign('cusid')->references('cusid')->on('custormers');
            $table->integer('agencyid')->unsigned()->index();
            $table->foreign('agencyid')->references('agencyid')->on('agencys');
            $table->integer('ref');
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
        Schema::dropIfExists('roomreservations');
    }
}
