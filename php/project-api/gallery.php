<?php

header("Content-Type:application/json");


if($_SERVER['REQUEST_METHOD'] != 'GET'){
    die("Get method only");
}


$photo = array_filter(scandir('photo'), fn ($file) => $file!='.' && $file!='..');

echo json_encode(array_values($photo));
