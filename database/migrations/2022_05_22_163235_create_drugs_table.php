<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('drug_id')->primary();
            $table->string('drug_name')->nullable();
            $table->text('drug_description')->nullable();
            $table->text('drug_side_effect')->nullable();
            $table->text('drug_dosage')->nullable();
            $table->string('drug_pill_imprint', 20)->nullable();
            $table->string('drug_pill_shape', 50)->nullable();
            $table->string('drug_pill_color', 30)->nullable();
            $table->string('drug_image')->nullable();
            $table->integer('letter_id')->nullable()->index('letter_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}
