<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'ecommerce-backend'], function (){
    Route::get('/',[DashboardController::class,'index']);

    require_once __DIR__ . '\user\user.php';
});
