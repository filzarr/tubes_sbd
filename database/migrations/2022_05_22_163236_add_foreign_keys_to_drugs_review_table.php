<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDrugsReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drugs_review', function (Blueprint $table) {
            $table->foreign(['drug_id'], 'drugs_review_ibfk_2')->references(['drug_id'])->on('drugs');
            $table->foreign(['review_id'], 'drugs_review_ibfk_1')->references(['review_id'])->on('review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drugs_review', function (Blueprint $table) {
            $table->dropForeign('drugs_review_ibfk_2');
            $table->dropForeign('drugs_review_ibfk_1');
        });
    }
}
