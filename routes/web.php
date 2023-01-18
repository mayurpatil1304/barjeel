<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Footer_Links;

use App\Http\Controllers\product_and_services;
use App\Http\Controllers\goal_partner;
use App\Http\Controllers\knowledge_center;
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


Route::get('about_us',[Home::class,'about_us']);

############## product and servives #####################
Route::get('equites', [product_and_services::class, 'equites_view'])->name('nav.equites');
Route::get('mutual-fund',[product_and_services::class, 'mutual_fund_view'])->name('nav.mutual_fund');
Route::get('derivatives',[product_and_services::class,'derivatives_view'])->name('nav.derivatives');


#################### goal partner ###################

Route::get('sip-calculator', [])->name('nav.sip_calculator');
Route::get('goal-calculator',[])->name('nav.goal_calculator');

################# knowledge center ########################

Route::get('blog', [])->name('nav.blog');
Route::get('faq',[])->name('nav.faq');
Route::get('webinars',[])->name('nav.webinars');

