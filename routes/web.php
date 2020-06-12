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
Route::get('/article/cari', 'FrontController@cari');
Route::get('/tentang-kami', function (){
    return view('about-us');
});
/*Route::get('/tanya-jawab', function (){
    return view('forum');
})*/;
Route::get('/tanya-jawab', 'ForumController@index')->name('tanya-jawab.index');
Route::group(['middleware' => 'auth'], function (){
    /*Route::resource('tanya-jawab', 'ForumController')->except(['show']);*/

    Route::get('/tanya-jawab/buat', 'ForumController@create')->name('tanya-jawab.create');
    Route::post('/tanya-jawab/buat', 'ForumController@store')->name('tanya-jawab.store');

    Route::group(['prefix' => 'klien'], function (){
        Route::get('/profil', function (){
            return view('profile');
        });
        Route::put('/profil','Customer\ProfileController@update')->name('customer.update');
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
