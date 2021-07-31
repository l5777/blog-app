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



Route::get('/blog','App\Http\Controllers\BlogController@index')->name('blog.index');


Route::get('/blog/create','App\Http\Controllers\BlogController@create')->middleware('auth');

Route::post('blog/save','App\Http\Controllers\BlogController@store')->name('blog.store')->middleware('auth');

Route::get('blog/{blog}/edit','App\Http\Controllers\BlogController@edit')->name('blog.edit')->middleware('auth');

Route::put('blog/{blog}/update','App\Http\Controllers\BlogController@update')->name('blog.update')->middleware('auth');

Route::delete('blog/{blog}/destroy','App\Http\Controllers\BlogController@destroy')->name('blog.destroy')->middleware('auth');

Route::get('blog/{blog}/show','App\Http\Controllers\BlogController@show');

Route::post('blog/cmnt','App\Http\Controllers\CmntController@cmnt')->name('blog.cmnt');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
