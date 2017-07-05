<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('categoryId');
            $table->string('categoryType');
            $table->string('categoryName');
        });

        // Insert some stuff
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Food'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Grossary'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Entertainment'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Home'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Personal'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'credit',
                'categoryName' => 'Other'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'debit',
                'categoryName' => 'Job'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'debit',
                'categoryName' => 'Business'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'debit',
                'categoryName' => 'Personal'
            )
        );
        DB::table('categories')->insert(
            array(
                'categoryType' => 'debit',
                'categoryName' => 'Other'
            )
        );

        Schema::create('debits', function (Blueprint $table) {
            $table->increments('debitId');
            $table->integer('debitUserId')->unsigned()->default(0);
            $table->string('debitName');
            $table->integer('debitCategoryId')->unsigned()->default(0);
            $table->integer('debitAmount');
            $table->date('debitDate');
            $table->timestamps();
            $table->foreign('debitUserId')->references('id')->on('users');
            $table->foreign('debitCategoryId')->references('categoryId')->on('categories');
        });
        //insert debits
        DB::table('debits')->insert(
            array(
                'debitUserId' => '1',
                'debitName' => 'Salary',
                'debitCategoryId' => '7',
                'debitAmount' => '5000',
                'debitDate' => '2016-12-01'
            )
        );
        DB::table('debits')->insert(
            array(
                'debitUserId' => '1',
                'debitName' => 'Profit',
                'debitCategoryId' => '8',
                'debitAmount' => '6000',
                'debitDate' => '2016-12-02'
            )
        );
        DB::table('debits')->insert(
            array(
                'debitUserId' => '1',
                'debitName' => 'Savings',
                'debitCategoryId' => '9',
                'debitAmount' => '2000',
                'debitDate' => '2016-12-03'
            )
        );

        Schema::create('credits', function (Blueprint $table) {
            $table->increments('creditId');
            $table->integer('creditUserId')->unsigned()->default(0);
            $table->string('creditName');
            $table->integer('creditCategoryId')->unsigned()->default(0);
            $table->integer('creditAmount');
            $table->date('creditDate');
            $table->timestamps();
            $table->foreign('creditUserId')->references('id')->on('users');
            $table->foreign('creditCategoryId')->references('categoryId')->on('categories');
        });
        //insert debits
        DB::table('credits')->insert(
            array(
                'creditUserId' => '1',
                'creditName' => 'Pizza',
                'creditCategoryId' => '1',
                'creditAmount' => '50',
                'creditDate' => '2016-12-01'
            )
        );
        DB::table('credits')->insert(
            array(
                'creditUserId' => '1',
                'creditName' => 'Grossary spendings',
                'creditCategoryId' => '2',
                'creditAmount' => '100',
                'creditDate' => '2016-11-11'
            )
        );
        DB::table('credits')->insert(
            array(
                'creditUserId' => '1',
                'creditName' => 'Movie',
                'creditCategoryId' => '3',
                'creditAmount' => '50',
                'creditDate' => '2016-12-02'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
