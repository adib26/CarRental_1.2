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


// Home....
Route::get('/', function () {return view('index');});
Route::get('/home', function () {return view('index');})->name('home');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/aboutus', function () {return view('aboutUs');})->name('aboutus');



// login....
Route::get('/loginn', function () {return view('login');})->name('loginn');
Route::post('/checklogin', 'loginController@checklogin');
Route::get('/successlogin', 'loginController@successlogin');



// logout....
Route::get('/logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');




//Admin....
Route::get('/BlockUsers', function () {return view('Admin/BlockUsers');})->name('BlockUsers');
Route::get('/AdminHome', function () {return view('Admin/AdminHome');})->name('AdminHome');
Route::get('/AddCar', function () {return view('Admin/AddCar');})->name('AddCar');
Route::get('/AvailableCars', 'adminController@avaCar')->name('AvailableCars');
Route::post('/block', 'adminController@blockUser');
Route::post('/add_car', 'adminController@add_car')->name('add_car');
Route::post('/removeCar', 'adminController@removeCar')->name('removeCar');
Route::resource('car_table','adminController');



// User....
Route::get('/userhome', function () {return view('user/userhome');})->name('userhome')->middleware(['auth.user']);
Route::post('/rentAcar', 'DataRangeController@filterCar')->name('rentAcar');
Route::get('/rentAcar', 'DataRangeController@filterCar')->name('rentAcar')->middleware(['auth.user']);


Auth::routes();
