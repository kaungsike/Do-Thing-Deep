<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    // return view('welcome');
    return "Home Page";
});

Route::get('/about', function () {
    // return view('welcome');
    return "About Page";
});


Route::get('/contact', function () {
    return "Contact Page";
});

Route::get("/mac/{type}/{size}", function ($type, $size) {
    return "Mac Page $type and size $size";
});


Route::get("/profile/{id?}", function ($id = null) {
    return " User $id Profile Page";
});

Route::get(
    'area/{width}/{height}',
    fn($width, $height) => "Area of rectangle is $width * $height = " . ($width * $height)
);
