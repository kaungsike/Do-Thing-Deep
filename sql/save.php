<?php

echo "<pre>";


$con = mysqli_connect("localhost",'me','root');

// var_dump($con);

if(!$con){
    echo mysqli_connect_errno();
}


// print_r($_POST);

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// sql

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

echo $sql;