<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;
use App\Http\Controllers\TestController;

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

//Route::get('/', function () {

  //  return view('DefScreen',[
  //      'pro'=>product::all()
 //   ]);
//});


Route::get('/prodview', 'App\Http\Controllers\TestController@prodfunct');


Route::get('/findProductName', 'App\Http\Controllers\TestController@findProductName');

Route::get('/findPrice', 'App\Http\Controllers\TestController@findPrice');
Route::post('/register/create', 'App\Http\Controllers\TestController@addInvoice');




