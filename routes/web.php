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
Route::get('about-us',[Footer_Links::class,'about_us'])->name('about-us');
Route::get('career',[Footer_Links::class,'career'])->name('career');
Route::get('awards',[Footer_Links::class,'awards'])->name('awards');
Route::get('press-release',[Footer_Links::class,'press_release'])->name('press-release');
Route::get('Privacy-Policy',[Footer_Links::class,'privacy_policy'])->name('privacy-policy');
Route::get('Disclaimer',[Footer_Links::class,'disclaimer'])->name('disclaimer');
Route::get('archives-market-digest',[Footer_Links::class,'archives_market_digest'])->name('archives-market-digest');
Route::get('investor-grievance',[Footer_Links::class,'investor_grievance'])->name('investor-grievance');






Route::view('equites', 'navigation_bar\product_and_services\equites');
