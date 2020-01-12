<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayIranKishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_iranKish', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('merchantId');
            $table->string('sha1key');
            $table->string('callback');
            $table->timestamp();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Gateway_iranKish');
    }
}
