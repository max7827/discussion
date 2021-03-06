<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('d');
});

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');


Route::resource('discussions', 'DiscussionsController');
Route::resource('discussions/{discussion}/replies', 'RepliesController');
Route::get('users/notifications', 'UserController@notifications')->name('users.notifications');
Route::get('backupfiles', 'DiscussionsController@backupFiles');
Route::get('backupdatabase', 'DiscussionsController@backupDatabase');
Route::get('sendemail', 'DiscussionsController@sendemail');
Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', 'DiscussionsController@reply')->name('best-reply');
