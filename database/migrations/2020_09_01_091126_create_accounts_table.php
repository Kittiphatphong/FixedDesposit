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
            $table->string('contact');
            $table->date('start');
            $table->date('end');
            $table->decimal('interest', 5, 2);
            $table->double('amount');
            $table->double('amountWord');
            $table->string('receiveInterest');	
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->integer('typeDisposit_id');
            $table->integer('employee_id');
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
