<?php
require_once './de_connect.php';


// print_r($_POST);

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// sql

$sql = "INSERT INTO products (name,price,stock) VALUES ('$name',$price,$stock)";

$query = mysqli_query($con,$sql);

if($query){
    header('location:product-create-list.php');
}

echo $sql;