<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs_review', function (Blueprint $table) {
            $table->integer('drugs_review_id')->primary();
            $table->integer('review_id')->nullable()->index('review_id');
            $table->integer('drug_id')->nullable()->index('drug_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs_review');
    }
}
