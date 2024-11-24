<?php
require_once './de_connect.php';

// echo "<pre>";

// print_r($_POST);
// print_r($_GET);

// die();


$id = $_GET['row_id'];
$name = $_POST['name'];
$course_id = $_POST['course_id'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$register = isset($_POST['register']) ? 1 : 0;
$student_limit = $_POST['student_limit'];

// sql

$sql = "UPDATE batches SET name='$name',course_id=$course_id,start_date='$start_date',start_time='$start_time',end_time='$end_time',is_register_open=$register,student_limit=$student_limit WHERE id=$id";

$query = mysqli_query($con, $sql);

if ($query) {
    header('location:batch-list.php');
}

echo $sql;
