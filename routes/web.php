<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',"WebsiteController@Fontend_Homepage" )->name("Fontend_Homepage");
Route::get('/about',"WebsiteController@Fontend_About" )->name("Fontend_About");
Route::get('/service',"WebsiteController@Fontend_Service" )->name("Fontend_Service");
Route::get('/sdetails',"WebsiteController@Fontend_Service_Details" )->name("Fontend_Service_Details");
Route::get('/project',"WebsiteController@Fontend_Project" )->name("Fontend_Project");
Route::get('/contact',"WebsiteController@Fontend_ContactUs" )->name("Fontend_ContactUs");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
