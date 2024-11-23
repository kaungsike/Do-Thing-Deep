<?php

require_once './de_connect.php';

// print_r($_POST);

// die();

$id = $_POST['id'];
$title = $_POST['title'];
$short = $_POST['short'];
$fee = $_POST['fee'];

$sql = "UPDATE courses SET title='$title',short='$short',fee=$fee where id=$id";

$query = mysqli_query($con,$sql);



if($query){
    header("location:course-create-list.php");
}