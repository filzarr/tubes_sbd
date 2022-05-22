<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drug_class', function (Blueprint $table) {
            $table->integer('drug_class_id')->primary();
            $table->integer('drug_id')->nullable()->index('drug_id');
            $table->integer('class_id')->nullable()->index('class_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drug_class');
    }
}
