<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


Route::resource('/admin/department','Admin\DepartemntController',['as'=>'admin']);
Route::resource('/admin/category','Admin\CategoryController',['as'=>'admin']);
Route::resource('/admin/formation','Admin\FormationController',['as'=>'admin']);
Route::resource('/admin/creneau','Admin\CreneauController',['as'=>'admin']);
Route::resource('/admin/appel_sortant','Admin\AppelSortantController',['as'=>'admin']);
Route::resource('/admin/session','Admin\SessionController',['as'=>'admin']);
Route::resource('/admin/contrat','Admin\ContratController',['as'=>'admin']);
Route::get('/admin/contrat/getsessions/{id}','Admin\ContratController@getsessions',['as'=>'admin']);
Route::get('/admin/contrat/getprice/{id}','Admin\ContratController@getprice',['as'=>'admin']);
Route::get('/admin/contrat/getPourcentage/{id}','Admin\ContratController@getPourcentage',['as'=>'admin']);
Route::resource('/admin/inscription','Admin\PreinscriptionController',['as'=>'admin']);
Route::get('/admin/inscription/getsessions/{id}','Admin\PreinscriptionController@getsessions',['as'=>'admin']);
Route::get('/admin/inscription/getprice/{id}','Admin\PreinscriptionController@getprice',['as'=>'admin']);
Route::get('/admin/inscription/getPourcentage/{id}','Admin\PreinscriptionController@getPourcentage',['as'=>'admin']);
//Route::get('/admin/inscription/getsessions{id}','Admin\PreinscriptionController',['as'=>'admin']);
//Route::get('/teacher/groups/{group}/schedule','Teacher\GroupsController@schedule',['as'=>'teacher'])->name('teacher.groups.schedule');

