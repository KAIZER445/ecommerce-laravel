<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hello';
});

require_once __DIR__ . '/backend/backend.php';