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
            $table->string('renterUsername')->default('');
            $table->string('specification');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('price');
            $table->string('carLocation');
            $table->text('placeOfRecipt');
            $table->boolean('state')->default(false);
        });
    }


    public function down()
    {

    }
}
