<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrugClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_class', function (Blueprint $table) {
            $table->foreign(['class_id'], 'drug_class_ibfk_2')->references(['class_id'])->on('class_list');
            $table->foreign(['drug_id'], 'drug_class_ibfk_1')->references(['drug_id'])->on('drugs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drug_class', function (Blueprint $table) {
            $table->dropForeign('drug_class_ibfk_2');
            $table->dropForeign('drug_class_ibfk_1');
        });
    }
}
