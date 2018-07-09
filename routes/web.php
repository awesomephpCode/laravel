<?php


Route::get('/', 'dashboard\Login@login');

Route::group(['namespace' => 'Dashboard'],function (){

    Route::any('admin/login', 'Login@login')->name('admin/login');

    Route::group(['middleware' => ['adminLogin']],function(){

        Route::get('admin/out', 'Login@out')->name('admin/out');
        Route::any('admin/modify', 'Login@modify')->name('admin/modify');
        Route::post('admin/upload_avatar', 'Login@upload_avatar')->name('admin/upload_avatar');

        //主页
        Route::get('home', 'Home@index')->name('home');

    });
});

Route::get('test',function (){
    \App\Models\Admin::create(['username'=> 'admin','password'=>password_hash('admin',PASSWORD_DEFAULT),'avatar' => 'http://tp32.cc/public/img/avatar/2018-06-04/5b14b1b1c5c4e.gif']);
});