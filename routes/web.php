<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Support\Facades\Mail;

Auth::routes();
Route::get('/', 'PagesController@index');

Route::get('dashboard', 'DashboardController@index');

Route::get('debit', 'DashboardController@debit');
Route::get('credit', 'DashboardController@credit');
Route::get('creditgrid', 'DashboardController@creditgrid');
Route::get('debitgrid', 'DashboardController@debitgrid');
Route::get('editcredit/{creditId}', 'DashboardController@editcredit');
Route::get('editdebit/{debitId}', 'DashboardController@editdebit');


Route::post('addDebit', 'DashboardController@addDebit');
Route::post('addCredit', 'DashboardController@addCredit');
Route::post('editcredit/{creditId}', 'DashboardController@editcreditdata');
Route::post('editdebit/{debitId}', 'DashboardController@editdebitdata');

Route::get('deletecredit/{creditId}','DashboardController@deletecredit');
Route::get('deletedebit/{debitId}','DashboardController@deletedebit');

Route::get('charts', 'DashboardController@charts');
Route::get('debitcharts', 'DashboardController@debitcharts');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Route::get('password/resetpass','Auth\ResetPasswordController@forgotpassword');
Route::get('password/resetme/{token?}','Auth\ResetPasswordController@showResetFrm');
Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');
Route::post('password/resetpass','Auth\ResetPasswordController@resetPass');
/*
Route::post(
    '/password/email', function () {
    Mail::send('email', ['name' => 'Novica'], function ($message){
        $message ->to('nucurity@gmail.com', 'Some name')->from('phpmailer43@gmail.com')->subject('welcome');
    });
});
*/





//Route::post('/password/email', function ());

/* Example for declaration
Route::get('users',['uses' => 'UsersController@index']);
Route::get('users/create',['uses' => 'UsersController@create']);
Route::post('users',['uses' => 'UsersController@store']);
*/



