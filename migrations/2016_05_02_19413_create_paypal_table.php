<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayPayPalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_paypal', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('default_product_name');
            $table->string('default_shipment_price');
            $table->string('client_id');
            $table->string('secret');
            $table->string('mode');
            $table->string('http.ConnectionTimeOut');
            $table->string('log.LogEnabled');
            $table->string('log.FileName');
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
        Schema::drop('Gateway_paypal');
    }
}
