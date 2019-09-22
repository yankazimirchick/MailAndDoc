<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRitailI extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ritail_is', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipient',100);
            $table->string('ispolnitel',50);
            $table->date('date');
            $table->string('type',20);
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
        Schema::dropIfExists('ritail_is');
    }
}
