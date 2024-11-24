<?php

require_once './de_connect.php';

$id = $_GET['row_id'];

$sql = "DELETE FROM batches WHERE id=$id";

$query = mysqli_query($con,$sql);

if($query){
    header('location:batch-list.php');
}