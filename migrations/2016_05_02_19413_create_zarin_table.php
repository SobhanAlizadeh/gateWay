<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayZarinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_zarinPal', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('merchant_id');
            $table->string('type');
            $table->string('callbackUrl');
            $table->string('server');
            $table->string('email');
            $table->string('mobile');
            $table->string('description');
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
        Schema::drop('Gateway_zarinPal');
    }
}
