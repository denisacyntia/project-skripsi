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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artikel', 'FrontController@article')->name('front.article');
Route::get('/article/{slug}', 'FrontController@show')->name('front.show_product');
Route::get('/tentang-kami', function (){
    return view('about-us');
});

Route::group(['middleware' => 'auth'], function (){

    Route::group(['prefix' => 'customer'], function (){
        Route::get('/profil', function (){
            return view('profile');
        });
        Route::get('/dashboard', 'Customer\DashboardController@dashboard')->name('customer.dashboard');
    });


});

Route::group(['middleware' =>['auth', 'admin']], function (){
    Route::get('/dashboard', function (){
        return view('index');
    });

    Route::group(['prefix' => 'admin'], function (){
        Route::resource('article', 'ArticleController')->except(['show']);
    });

});
