<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/',fn()=> view('welcome'));

Route::get('/home', function () {
    // return view('welcome');
    return view('blog.home');
});

Route::get('/about', function () {
    // return view('welcome');
    return view('blog.about');
});


Route::get('/contact', function () {
    return view('blog.contact');
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


Route::get('/products',function(){
    // $products = file_get_contents('https://fakestoreapi.com/products');
    // return $products;
    $products = Http::get('https://fakestoreapi.com/products');
    dd($products);
});
