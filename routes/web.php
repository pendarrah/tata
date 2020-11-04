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

Route::get('/', 'AppController@index');


Route::get('/blog/{id}', 'BlogController@show')->name('app.blog');

Auth::routes();


// Add middleware auth
Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/index', 'IndexController@index')->name('dashboard.index');
    Route::resource('inquiry', 'InquiryController');
    Route::resource('package', 'PackageController');
    Route::any('package/delete', 'PackageController@destroy');
    Route::resource('user', 'UserController');
    Route::resource('tickets', 'TicketController');
    Route::get('tickets/delete/{id}', 'TicketController@destroy')->name('ticket.delete');

    Route::resource('blog', 'BlogController');
    Route::any('blog/delete', 'BlogController@destroy');


});

