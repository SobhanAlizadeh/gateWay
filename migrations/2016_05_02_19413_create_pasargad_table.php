<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Larabookir\Gateway\Enum;

class CreateGatewayPasargadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Gateway_pasargad', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->unsignedBigInteger('id', true);
            $table->string('terminalId');
            $table->string('merchantId');
            $table->string('certificatePath');
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
        Schema::drop('Gateway_pasargad');
    }
}
