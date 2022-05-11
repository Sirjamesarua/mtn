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

//Route::get('/verify-payment/{reference}', [App\Http\Controllers\Auth\HomeController::class, 'verify']);

Route::get('/verify-payment/{reference}', function($reference){
	$curl = curl_init();
         $sec="sk_test_c6804e7ad469d1e972bb693b13e25018a09d3cc2";
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/:reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "Authorization: Bearer $sec",
              "Cache-Control: no-cache",
            ),
          ));
          
          $response = curl_exec($curl);
          $err = curl_error($curl);
          //curl_close($curl);
          
          /*if ($err) {
            echo "cURL Error #:" . $err;
          } else {
            echo $response;
          }*/
          return $response;
          //$new_data = json_decode($response);
          //return $new_data;
});
