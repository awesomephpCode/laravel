<?php

Route::get('/', 'dashboard\Login@login');

Route::group(['namespace' => 'Dashboard'],function (){

    Route::get('/', 'Login@login');
    Route::any('admin/login', 'Login@login')->name('admin/login');
    Route::group(['middleware' => ['adminLogin']],function(){

        Route::get('admin/out', 'Login@out')->name('admin/out');
        Route::any('admin/modify', 'Login@modify')->name('admin/modify');
        Route::post('admin/upload_avatar', 'Login@upload_avatar')->name('admin/upload_avatar');
        //主页
        Route::get('home', 'Home@index')->name('home');
    });
});


Route::group(['namespace'=>'Common', 'prefix'=>'common'], function () {
    //上传图片
    Route::any('update/img', 'UploadController@upload_img')->name('common.update.img');
});

