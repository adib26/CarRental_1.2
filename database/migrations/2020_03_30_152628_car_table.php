<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarTable extends Migration
{

    public function up()
    {
        Schema::create('car_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('renter')->nullable();
            $table->string('specification');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->string('price');
            $table->string('place');
            $table->boolean('state')->default(false);
            $table->mediumText('Image')->nullable();

        });
    }


    public function down()
    {

    }
}
