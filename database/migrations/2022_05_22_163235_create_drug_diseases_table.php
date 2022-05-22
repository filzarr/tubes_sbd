<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_diseases', function (Blueprint $table) {
            $table->integer('drug_diseases_id')->primary();
            $table->integer('drug_id')->nullable()->index('drug_id');
            $table->integer('diseases_id')->nullable()->index('diseases_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_diseases');
    }
}
