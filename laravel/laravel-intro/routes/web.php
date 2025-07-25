<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/',fn()=> view('welcome'));

// Route::get('/home', function () {
//     // return view('welcome');
//     return view('blog.home');
// });

// Route::get('/about', function () {
//     // return view('welcome');
//     return view('blog.about');
// });


// Route::get('/contact', function () {
//     return view('blog.contact');
// });

// Route::get("/mac/{type}/{size}", function ($type, $size) {
//     return "Mac Page $type and size $size";
// });


// Route::get("/profile/{id?}", function ($id = null) {
//     return " User $id Profile Page";
// });

// Route::get(
//     'area/{width}/{height}',
//     fn($width, $height) => "Area of rectangle is $width * $height = " . ($width * $height)
// );


// Route::get('/products',function(){
    // $products = file_get_contents('https://fakestoreapi.com/products');
    // return $products;
//     $products = Http::get('https://fakestoreapi.com/products');
//     dd($products);
// });

Route::get('/home',[ItemController::class,'home']);

Route::get('/about',[ItemController::class,'about']);

Route::get('/contact',[ItemController::class,'contact']);

Route::get('/calculate/{w}/{h}',[ItemController::class,'calculate']);

Route::get('/test',[TestController::class,'test']);

Route::get('/my',[MyController::class,'my']);

Route::get('/sayHello',[MyController::class,'sayHello']);

// Route::get("/product",[ProductController::class,"index"]);

// Route::post("/product/create",[ProductController::class,"create"]);

// Route::post("/product",[ProductController::class,"store"]);

// Route::get("/product/show",[ProductController::class,"show"]);

// Route::get("/product",[ProductController::class,"index"]);

// Route::get("/product",[ProductController::class,"index"]);

// Route::get("/product",[ProductController::class,"index"]);

Route::resource("product",ProductController::class);
