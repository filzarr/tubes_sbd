<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->integer('diseases_id')->primary();
            $table->string('diseases_name', 225)->nullable();
            $table->text('diseases_desc')->nullable();
            $table->text('diseases_causes')->nullable();
            $table->text('diseases_symptoms')->nullable();
            $table->text('diseases_treatment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseases');
    }
}
