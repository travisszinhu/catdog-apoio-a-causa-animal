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
})->name('welcome');

Route::get('/duvidas', function () {
    return view('duvidas');
})->name('duvidas');

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/formularios', function () {
    return view('formularios');
})->name('formularios');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
