<?php

require_once './de_connect.php';

$id = $_GET['row_id'];

$sql = "DELETE FROM courses WHERE id=$id";

$query = mysqli_query($con,$sql);

if($query){
    header('location:course-create-list.php');
}