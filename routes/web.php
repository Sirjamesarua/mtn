<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
//namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/','App\Http\Controllers\PagesController@index');


Route::get('/paystack', [App\Http\Controllers\HomeController::class, 'paystack'])->name('paystack');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function(){
	return Redirect::to('home');
});


Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('login');
});


Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verify-payment/{reference}', [App\Http\Controllers\Auth\HomeController::class, 'verify']);

/*Route::get('/verify-payment/{reference}', function(){
	echo '<script>
		console.log("hghgh");
	</script>';
});*/
