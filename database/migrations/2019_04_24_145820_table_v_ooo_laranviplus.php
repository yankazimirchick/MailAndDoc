<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableVOooLaranviplus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_ooo_laranvipluses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ispolnitel',50);
            $table->date('date');
            $table->date('date_p');
            $table->string('sender',100);
            $table->string('type',20);
            $table->string('t_number',20);
            $table->date('t_date')->nullable();
            $table->text('content');
            $table->string('urn_document',100)->nullable();
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
        Schema::dropIfExists('v_ooo_laranvipluses');
    }
}
