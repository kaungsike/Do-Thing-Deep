<?php
require_once './de_connect.php';

// echo "<pre>";

// print_r($_POST);

// die();


$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$nation = $_POST['nation'];
$gender = $_POST['gender'];
$pocket_money = $_POST['pocket_money'];

// sql

$sql = "INSERT INTO students (name,date_of_birth,nationality_id,gender_id,pocket_money) VALUES ('$name','$date_of_birth',$nation,$gender,$pocket_money)";

$query = mysqli_query($con, $sql);

if ($query) {
    header('location:student-list.php');
}

echo $sql;
