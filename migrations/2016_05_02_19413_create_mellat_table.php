<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayMellatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_mellat', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('username');
            $table->string('password');
            $table->string('terminalId');
            $table->string('callbackUrl');
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
        Schema::drop('Gateway_mellat');
    }
}
