<?php

echo "<pre>";

$id = $_GET['row_id'];

$con = mysqli_connect("localhost", 'me', 'root', 'wad_shop');

// var_dump($con);

if (!$con) {
    die(mysqli_connect_errno());
}

$sql = "DELETE FROM products WHERE id=$id";

$query = mysqli_query($con,$sql);

if($query){
    header('location:index.php');
}