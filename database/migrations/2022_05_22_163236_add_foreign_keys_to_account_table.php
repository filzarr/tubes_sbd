<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('account', function (Blueprint $table) {
            $table->foreign(['user_med_id'], 'account_ibfk_1')->references(['user_med_id'])->on('user_med');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account', function (Blueprint $table) {
            $table->dropForeign('account_ibfk_1');
        });
    }
}
