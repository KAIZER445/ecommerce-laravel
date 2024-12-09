<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user'], function (){
    Route::get('/',function(){
        return 'i am user';
    });

});
