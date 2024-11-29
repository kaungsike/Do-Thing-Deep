<?php
require_once './de_connect.php';

echo "<pre>";

print_r($_POST);
print_r($_GET);

$id = $_GET['row_id'];
$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$nationality_id= $_POST['nationality_id'];
$gender_id = isset($_POST['gender_id'])? $_POST['gender_id'] : 1;
$pocket_money = $_POST['pocket_money'];

// echo $nationality_id;

// die();

// sql

$sql = "update students set name='$name',date_of_birth='$date_of_birth',nationality_id=$nationality_id,gender_id=$gender_id,pocket_money=$pocket_money where id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header('location:student-list.php');
}

echo $sql;
