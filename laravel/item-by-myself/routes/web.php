<?php

use App\Http\Controllers\ItemByMyselfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/item-by-myself', ItemByMyselfController::class);
