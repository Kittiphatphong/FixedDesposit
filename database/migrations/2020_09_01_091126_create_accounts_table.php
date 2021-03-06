<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('idAccount');
            $table->date('start');
            $table->date('end');
            $table->decimal('interest', 5, 0);
            $table->double('amount');
            $table->string('amountWord');
            $table->string('receiveInterest');
            $table->boolean('generate')->default(0);	
            $table->BigInteger('user_id');
            $table->BigInteger('customer_id');
            $table->BigInteger('typeDisposit_id');
            $table->BigInteger('employee_id');
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
        Schema::dropIfExists('accounts');
    }
}
