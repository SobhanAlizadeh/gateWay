<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayPayIRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_payIr', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('api');
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
        Schema::drop('Gateway_payIr');
    }
}
