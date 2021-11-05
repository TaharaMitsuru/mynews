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

//http://XXXXXX.jp/XXXからアクセスが来た場合、
//AAAControllerのbbbというActionに渡すRoutingの設定。
Route::group(['prefix' => 'XXX'], function(){
    Route::get('/', 'XXX\AAAController@bbb');
});
