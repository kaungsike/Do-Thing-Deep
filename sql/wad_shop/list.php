<?php

require_once './de_connect.php';


$sql = 'SELECT * FROM products';


$query = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($query)){
    print_r($row);
}