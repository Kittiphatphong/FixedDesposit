<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusUserIdToWinRandomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('win_randoms', function (Blueprint $table) {
            $table->integer('status')->nullable()->after('amount')->default(1);
            $table->BigInteger('user_id')->nullable()->after('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('win_randoms', function (Blueprint $table) {
            //
        });
    }
}
