<?php

header("Contenc-Type:application/json");


if($_SERVER['REQUEST_METHOD'] != "POST"){
    die("POST method only!");
}

// print_r($_POST);

if(empty($_FILES['photo'])){
    die("Need file input");
}

$saveFolder = 'photo';

if(!is_dir($saveFolder)){
    mkdir($saveFolder);
}

$extension = pathinfo($_FILES['photo']['name'])['extension'];

$saveFileName = './'.$saveFolder.'/'.uniqid().'.'.$extension;

if(move_uploaded_file($_FILES['photo']['tmp_name'],$saveFileName)){
    echo json_encode("Update Successful!");
    die("");
}

// echo $saveFileName;

// print_r($extension);

print_r($_FILES);