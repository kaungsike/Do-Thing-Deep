<?php
require_once './de_connect.php';

// echo "<pre>";

// print_r($_POST);

// die();

$title = $_POST['title'];
$short = $_POST['short'];
$fee = $_POST['fee'];

// sql

$sql = "INSERT INTO courses (title,short,fee) VALUES ('$title','$short',$fee)";

$query = mysqli_query($con,$sql);

if($query){
    header('location:course-create-list.php');
}

echo $sql;