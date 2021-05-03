<?php

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
include('admin.php');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/','SiteController@index')->name('homepage');
Route::get('/portfolio', function () {
    return view('nothing');
});
Route::get('/contato', function () {
    return view('contato');
})->name('contato');
Route::get('/blog/categoria/{category}', 'BlogController@category')->name('site.blog.category');
Route::get('/blog/{post}', 'BlogController@show')->name('site.blog.show');
Route::get('/blog', 'BlogController@index')->name('site.blog');
Route::get('/sobre', function () {
    return view('nothing');
});
Route::get('/trabalhe-conosco', function () {
    return view('nothing');
});
Route::post('/enviar-formulario', 'SiteController@sendEmail')->name('form.contato');
Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
