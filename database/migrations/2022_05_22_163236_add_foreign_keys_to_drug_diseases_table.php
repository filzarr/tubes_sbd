<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrugDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drug_diseases', function (Blueprint $table) {
            $table->foreign(['drug_id'], 'drug_diseases_ibfk_2')->references(['drug_id'])->on('drugs');
            $table->foreign(['diseases_id'], 'drug_diseases_ibfk_1')->references(['diseases_id'])->on('diseases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drug_diseases', function (Blueprint $table) {
            $table->dropForeign('drug_diseases_ibfk_2');
            $table->dropForeign('drug_diseases_ibfk_1');
        });
    }
}
