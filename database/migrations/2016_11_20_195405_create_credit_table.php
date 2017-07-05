<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('creditId');
            $table->integer('creditUserId')->unsigned;
            $table->string('creditName');
            $table->integer('creditCategoryId')->unsigned;
            $table->integer('creditAmount');
            $table->timestamps();
            $table->foreign('creditUserId')
                ->references('id')->on('users');
            $table->foreign('creditCategoryId')
                ->references('categoryId')->on('categories');
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
        Schema::drop('credits');
    }
}
