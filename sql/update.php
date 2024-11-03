<?php

$con = mysqli_connect("localhost", 'me', 'root', 'wad_shop');

// var_dump($con);

if (!$con) {
    die(mysqli_connect_errno());
}

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "UPDATE products SET name='$name',price=$price,stock=$stock where id=$id";

$query = mysqli_query($con,$sql);



if($query){
    header("location:index.php");
}