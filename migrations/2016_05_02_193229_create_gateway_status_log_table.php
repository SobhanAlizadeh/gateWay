<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGatewayStatusLogTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->getLogTable(), function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->increments('id');
            $table->unsignedBigInteger('transaction_id');
            $table->string('result_code', 10)->nullable();
            $table->string('result_message', 255)->nullable();
            $table->timestamp('log_date')->nullable();

            $table
                ->foreign('transaction_id')
                ->references('id')
                ->on($this->getTable())
                ->onDelete('cascade');
        });
    }

    function getLogTable()
    {
        return $this->getTable() . '_logs';
    }

    function getTable()
    {
        return config('gateway.table', 'gateway_transactions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->getLogTable());
    }
}
