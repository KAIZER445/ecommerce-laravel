<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'ecommerce-backend'], function (){
    Route::get('/',function(){
        return 'i am backend';
    });

    require_once __DIR__ . '\user\user.php';
});