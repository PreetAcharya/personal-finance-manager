<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('debits', function (Blueprint $table) {
            $table->increments('debitId');
            $table->integer('debitUserId')->unsigned;
            $table->string('debitName');
            $table->integer('debitCategoryId')->unsigned;
            $table->integer('debitAmount');
            $table->timestamps();
            $table->foreign('debitUserId')->references('id')->on('users');
            $table->foreign('debitCategoryId')->references('categoryId')->on('categories');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('debits');
    }
}
