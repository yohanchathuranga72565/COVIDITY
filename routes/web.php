<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('user.home');
// })->name('home');

Route::get('/','HomeController@index')->name('home.index');


Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/viewAdminProfile/{id}','AdminController@viewProfile')->name('admin.viewProfile');
Route::post('/editAdminProfile/{id}','AdminController@editProfile')->name('admin.profileUpdate');
Route::get('/showAllPHIUsers','AdminController@showAllUsers')->name('admin.showAllUsers');
Route::get('/deletePHI/{id}','AdminController@deleteUser')->name('phi.deletePHI');

Route::get('/phi','PHIController@index')->name('phi.index');
Route::get('/phiRegister','PHIController@register')->name('phi.register');
Route::post('/phiRegisterCreate','PHIController@registerCreate')->name('phi.registerCreate');
Route::get('/viewPHIProfile/{id}','PHIController@viewProfile')->name('phi.viewProfile');
Route::post('/editPHIProfile/{id}','PHIController@editProfile')->name('phi.profileUpdate');
Route::get('/showAllUsers','PHIController@showAllUsers')->name('phi.showAllUsers');


Route::get('/users','UserController@index')->name('users.index');
Route::get('/usersRegister','UserController@register')->name('users.register');
Route::post('/userRegisterCreate','UserController@registerCreate')->name('users.registerCreate');
Route::get('/viewUserProfile/{id}','UserController@viewProfile')->name('users.viewProfile');
Route::post('/editUserProfile/{id}','UserController@editProfile')->name('users.profileUpdate');
Route::get('/contactUs','UserController@showContactUs')->name('users.contactUs');
Route::post('/createContact','UserController@createContact')->name('users.createContact');

Route::resource('/contact', 'ContactController');

Route::resource('/healthTips', 'HealthTipController');
Route::get('/showAllHealthTips','HealthTipController@showAll')->name('showAllHealthTips');

Route::resource('/about', 'AboutController');

Route::resource('/news', 'NewsController');
Route::get('/showAllNews','NewsController@showAll')->name('showAllNews');

Route::get('/comment','CommentController@index')->name('chatSystem');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');
