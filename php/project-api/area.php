<?php

header('Content-Type:application/json');

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('POST method only!');
}


// print_r($_SERVER);

if(empty($_POST['breadth']) || empty(($_POST)['width'])){
    $message = json_encode(['message' => 'Need all inputs']);
    die($message);
    
}

$area = $_POST['width']*$_POST['breadth'];

$_POST['area'] = $area.'sqrt';


print_r(json_encode($_POST));