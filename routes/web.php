<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/user/group', 'GroupController@groupDets')->name('groupDets');
Route::post('/group/store', 'GroupController@store')->name('newGroup');
Route::post('/user/assign', 'UserController@assign')->name('assignGroup');
Route::post('/user/change', 'UserController@change')->name('userChangeGroup');
Route::get('/group/create', 'GroupController@createGroup')->name('createGroup');
Route::get('/loans/view', 'LoanController@getRequestedLoans')->name('loanRequests');
Route::get('/message/view', 'MessageController@retrieveMessages')->name('messages');
Route::get('/group/join',   'GroupController@joinGroup')->name('joinGroup');
Route::get('/group/change', 'GroupController@changeGroup')->name('changeGroup');
Route::post('/loan/request', 'LoanController@requestLoan')->name('requestLoan');
Route::post('/message/new', 'MessageController@sendMessage')->name('sendMessage');
Route::post('/loan/pay', 'LoanController@payLoan')->name('payLoan');
Route::post('/saving/new', 'SavingController@addSaving')->name('newSaving');
