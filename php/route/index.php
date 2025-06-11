<?php


require_once './functions.php';
require_once "./router/web.php";
// echo "I'm index";

// echo "<pre>";

// print_r($_SERVER);

// echo $_SERVER ['REQUEST_URI']; 


$path = $_SERVER['PATH_INFO'] ?? "/";

// if ($path) {
//     $file  ="./index.php";
// } elseif ($path === '/about-us') {
//     $file  ="./view/about.php";
// } elseif ($path === '/service') {
//     $file  ="./view/service.php";
// } else {
//     $file ="./view/not-found.php";
// }


// require $file;

// $route = [
//     '/' => 'home',
//     '/about-us' => 'about',
//     '/services' => 'service',
// ];

// require_once $route[$path] ?? 'not-found';

// view($route[$path]) ?? 'not-found';