<?php

require_once './de_connect.php';




// print_r($_POST);

// die();

$student_id = $_POST["student_id"];
$batch_id = $_POST["batch_id"];


// SQL 

$sql = "INSERT INTO enrollments (student_id,batch_id) VALUES ($student_id,$batch_id)";

$query = mysqli_query($con, $sql); // working stage

if ($query) {
    header("Location:enroll-list.php");
}

// var_dump($query);

// echo $sql;