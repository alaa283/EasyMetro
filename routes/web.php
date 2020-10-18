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


Route::get('/', function () {
    return view('welcome');showlogin
}); */
Route::get('/register',"UserController@registerPage");

Route::get('/loginP',"UserController@showlogin");

Route::get('/index',"UserController@indexPage");
//Route::post('/indexlog',"UserController@login");
Route::match(['get','post'],'/userRegister','UserController@registerUser');

Route::match(['get','post'],'/login','UserController@loginPage');


Route::post('/addimage','UserController@store')->name('addimage');

Route::get('/addlost',"UserController@addLostPage");
Route::get('/showpost',"UserController@showpost");

//Route::post('/insertpost',"UserController@addPost");

Route::get('/suggestPage',"UserController@SuggestPage");
Route::post('/insertSuggest','UserController@InsertSuggest')->name('insertSuggest');


Route::get('/contact',"UserController@contactPage");
Route::post('/insertContact',"UserController@insertContact");

//Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


///map
Route::get('/map',"UserController@mapPage");

///uses
Route::get('/use',"UserController@usePage");
//what they says///////////

Route::get('/talk',"UserController@talkPage");



/***************************************tickets***************************/

Route::match(['get', 'post'], '/users/d_ticket', 'UserController@d_ticket');
Route::get('/users/useE', 'UserController@useE');
Route::match(['get', 'post'], '/Sups/sup_monthly', 'UserController@sup_monthly');

Route::match(['get', 'post'],'/line1','UserController@lin1P');




/**************admin**************************/

Route::match(['get', 'post'],'/Admin','AdminController@AdminIndex');
Route::match(['get', 'post'],'/Acontact','UserController@AdminContact');
Route::match(['get', 'post'],'/Asuggest','UserController@AdminSuggest');



Route::match(['get', 'post'], '/admin/money_daily_ticket', 'MoneyDailyTicketController@money_daily_ticket');
Route::match(['get', 'post'], '/admin/editDailyTicket/{id}', 'MoneyDailyTicketController@editDailyTicket');
Route::match(['get', 'post'], '/admin/deleteDailyTicket/{id}', 'MoneyDailyTicketController@deleteDailyTicket');
Route::get('/admin/viewDailyTicket', 'MoneyDailyTicketController@viewDailyTicket');

Route::match(['get', 'post'], '/admin/types_subscription', 'SubscrptionsController@types_subscription');
Route::match(['get', 'post'], '/admin/editSubscription/{id_s}', 'SubscrptionsController@editSubscription');
Route::match(['get', 'post'], '/adm.in/deleteSubscription/{id_s}', 'SubscrptionsController@deleteSubscription');
Route::get('/admin/viewSubscription', 'SubscrptionsController@viewSubscription');


/**********************************line*******************************/

Route::match(['get', 'post'],'/lineview','TestController@linefunct');


Route::get('/findlineName','TestController@findlineName');

Route::get('/findPrice','TestController@findPrice');


Route::match(['get', 'post'],'/lineview1','TestController@linefunct1');


Route::get('/findlineName1','TestController@findlineName1');

Route::get('/findPrice1','TestController@findPrice1');

Route::get('/findlineName2','TestController@findlineName2');

Route::get('/findPrice2','TestController@findPrice2');

/*******************************************qrcode*********************************/
Route::match(['get','post'],'/qrcode','UserController@QrPage');



Route::match(['get','post'],'/download','UserController@download');




