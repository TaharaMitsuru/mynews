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

Route::group(['prefix' => 'admin'], function() {
    //前章でAdmin/ProfileControllerを作成し、add Action,edit Actioonを追加した。
   
  
   //web.phpを編集して、admin/profile/createにアクセスしたら ProfileController
   //のadd Actionを割り当てる。
    Route::get('admin/profile/create', 
'Admin\ProfileController@add');
   
   
   //admin/profile/edit にアクセスしたらProfileControllerの
   //edit Actionに割り当てる。
    Route::get('admin/profile/edit',
'Admin\ProfileController@edit');
});
