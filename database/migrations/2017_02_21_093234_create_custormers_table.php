<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustormersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custormers', function (Blueprint $table) {
            $table->increments('cusid');
            $table->string('name');
            $table->string('surname');
            $table->string('countrycode','3')->index();

             $table->foreign('countrycode')->references('countrycode')->on('countrycodes')->onDelete('cascade');

            $table->date('brithday');
            $table->string('email');
            $table->string('passportno');
            $table->text('note')->nullable();

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
        Schema::dropIfExists('custormers');
    }
}
