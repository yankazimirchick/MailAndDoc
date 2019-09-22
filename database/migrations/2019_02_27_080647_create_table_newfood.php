<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNewfood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newfoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ispolnitel',50);
            $table->date('date');
            $table->date('date_p');
            $table->string('sender',100);
            $table->string('type',20);
            $table->string('t_number',20);
            $table->date('t_date')->nullable();
            $table->text('content');
            $table->string('urn_document',100)->nullable()->change();
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
        Schema::dropIfExists('newfoods');
    }
}
