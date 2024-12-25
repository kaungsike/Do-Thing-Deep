<?php

require_once("./sql-connection.php");

echo "<pre>";

print_r($_POST);

$name = $_POST['name'];
$edu_mail = $_POST['edu_mail'];


$sql = "select * from students where edu_mail='$edu_mail'";


$query = mysqli_query($con,$sql);

var_dump($query);


if($query){
    $data = mysqli_fetch_assoc($query);

    if($data){
        $add_student_sql = "";
    }else{
        "This edu mail already exis";
    }

    echo "Correct";
}else{
    echo "Smoething worng in sql";
}