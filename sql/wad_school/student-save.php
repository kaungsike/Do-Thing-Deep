<?php
require_once './de_connect.php';


$name = $_POST['name'];
$course_id = $_POST['course_id'];
$start_date = $_POST['start_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$register = isset($_POST['register']) ? 1 : 0;
$student_limit = $_POST['student_limit'];

// sql

$sql = "INSERT INTO batches (name,course_id,start_date,start_time,end_time,is_register_open,student_limit) VALUES ('$name',$course_id,'$start_date','$start_time','$end_time',$register,$student_limit)";

$query = mysqli_query($con, $sql);

if ($query) {
    header('location:batch-list.php');
}

echo $sql;
