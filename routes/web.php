<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Footer_Links;

use App\Http\Controllers\product_and_services;
use App\Http\Controllers\goal_partner;
use App\Http\Controllers\knowledge_center;
use App\Http\Controllers\login;
use App\Http\Controllers\new_investor;
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

################# login ###########################

Route::get('login',[login::class,'login_index'])->name('login.index');
Route::get('customer-login',[login::class,'login_customer'])->name('login.customer');
Route::get('dgcx-login',[login::class,'login_dgcx'])->name('login.dgcx');
Route::get('trade-login',[login::class,'login_trade'])->name('login.trade');

################ new _invester ##########################

Route::get('new-investor',[new_investor::class,'new_investor'])->name('new_investor');

############## product and servives #####################

Route::get('equites', [product_and_services::class, 'equites_view'])->name('nav.equites');
Route::get('mutual-fund',[product_and_services::class, 'mutual_fund_view'])->name('nav.mutual_fund');
Route::get('derivatives',[product_and_services::class,'derivatives_view'])->name('nav.derivatives');


#################### goal partner ###################

Route::get('sip-calculator', [goal_partner::class,'sip_calculator'])->name('nav.sip_calculator');
Route::get('goal-calculator',[goal_partner::class,'goal_calculator'])->name('nav.goal_calculator');

################# knowledge center ########################

Route::get('blog', [knowledge_center::class,'blog_view'])->name('nav.blog');
Route::get('faq',[knowledge_center::class,'faq_view'])->name('nav.faq');
Route::get('webinars',[knowledge_center::class,'webinars_view'])->name('nav.webinars');

