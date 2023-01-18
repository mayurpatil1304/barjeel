<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Footer_Links;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Home::class,'index']);


//####################################### Footer Links ##############################################
Route::get('about_us',[Footer_Links::class,'about_us']);
Route::get('our-team',[Footer_Links::class,'our_team']);






Route::view('equites', 'navigation_bar\product_and_services\equites');
