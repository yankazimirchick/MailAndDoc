<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVhod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vhods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ispolnitel',50);//Исполнитель
            $table->date('date');//Дата
            $table->date('date_p');//Дата вручения
            $table->string('sender',100);//Отправитель
            $table->string('type',20);//Тип
            $table->string('recep',100);//Получатель
            $table->text('content');//Содержание
            $table->string('urn_document',100)->nullable()->change();//Файл
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
        Schema::dropIfExists('vhods');
    }
}
