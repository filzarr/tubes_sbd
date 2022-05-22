<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_med', function (Blueprint $table) {
            $table->integer('user_med_id')->primary();
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
        Schema::dropIfExists('user_med');
    }
}
