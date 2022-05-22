<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserMedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_med', function (Blueprint $table) {
            $table->foreign(['diseases_id'], 'user_med_ibfk_2')->references(['diseases_id'])->on('diseases');
            $table->foreign(['drug_id'], 'user_med_ibfk_1')->references(['drug_id'])->on('drugs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_med', function (Blueprint $table) {
            $table->dropForeign('user_med_ibfk_2');
            $table->dropForeign('user_med_ibfk_1');
        });
    }
}
