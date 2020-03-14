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

Route::get('/', function () {return view('index');});
Route::get('/home', function () {return view('index');})->name('home');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/aboutus', function () {return view('aboutUs');})->name('aboutus');
Route::get('/BlockUsers', function () {return view('BlockUsers');})->name('BlockUsers');
Route::get('/loginn', function () {return view('login');})->name('loginn');
//Route::get('/main', 'MainController@index');
Route::post('/checklogin', 'MainController@checklogin');
Route::get('/successlogin', 'MainController@successlogin');
//Route::get('main/logout', 'MainController@logout');




Route::get('/logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


Auth::routes();

Route::get('/userhome', function () {return view('userhome');})->name('userhome');
