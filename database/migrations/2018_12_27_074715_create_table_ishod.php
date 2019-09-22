<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIshod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ishod', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('number');//номер
            $table->string('recep',100);//получатель
            $table->string('date',6);//дата
            $table->string('sender',100);//отправитель
            $table->text('content');//Содержание
            $table->string('urn_document',100);//Файл
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
        Schema::dropIfExists('ishod');
    }
}
