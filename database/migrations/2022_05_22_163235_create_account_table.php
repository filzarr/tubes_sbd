<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->string('email', 50)->nullable();
            $table->string('password')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('user_med_id')->nullable()->index('user_med_id');
            $table->integer('user_phone')->nullable();
            $table->string('job')->nullable();
            $table->string('role', 20)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
