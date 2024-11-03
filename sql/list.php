<?php

// read

echo "<pre>";

$con = mysqli_connect('localhost','me','root','wad_shop');

if(!$con){
    die(mysqli_connect_errno());
}


$sql = 'SELECT * FROM products';


$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($query)){
    print_r($row);
}