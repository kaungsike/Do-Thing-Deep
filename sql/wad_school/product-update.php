<?php

require_once './de_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$sql = "UPDATE products SET name='$name',price=$price,stock=$stock where id=$id";

$query = mysqli_query($con,$sql);



if($query){
    header("location:product-create-list.php");
}