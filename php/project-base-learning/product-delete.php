<?php 

// echo '<pre>';

$fileName = $_GET['file_name'];

$obj = json_decode(file_get_contents('./product/'.$fileName));

// print_r($obj);

if(unlink('./product-photo/'.$obj->product_photo)){
    if(unlink('./product/'.$fileName)){
        header('location:product.php');
    }
}
