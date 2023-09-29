<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaybillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paybills', function (Blueprint $table) {
            $table->id();
            $table->string('clint_username');
            $table->string('Clint_name');
            $table->string('Clint_phone');
            $table->string('Clint_mbps');
            $table->string('pay_date');
            $table->string('currency');
            $table->decimal('amount', 12, 2);
            $table->string('invoice');
            $table->string('trxID')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('paybills');
    }
}
