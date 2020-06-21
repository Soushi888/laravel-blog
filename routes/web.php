<?php

use App\Example;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
    return view('welcome');
});



Route::get('/clients', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "articles" =>  App\Article::take(3)->latest()->get()
    ]);
});

/**
 * Articles
 */

Route::get('/articles', 'ArticleController@index')->name('articles.index');

Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
Route::post('/articles', 'ArticleController@store');

Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');

Route::get('/articles/{article}/edit', 'ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticleController@update');

Route::delete('/articles/{article}', 'ArticleController@destroy');






/**
 * Contact
 */
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

/**
 * Payment
 */
Route::get('/payments', 'PaymentsController@create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');


Route::get('/notifications', 'UserNotificationsController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
