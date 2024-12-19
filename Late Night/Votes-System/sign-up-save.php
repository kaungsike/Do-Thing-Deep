<?php


include("./sql-connection.php");


echo "<pre>";

print_r($_POST);


$name = $_POST['name'];
$edu_mail = $_POST['edu_mail'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];


$sql = "select * from students where edu_mail='$edu_mail'";

// echo $sql;

$query = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($query);

if($data){

    $sign_up_sql = "update students set name='$name',password='$password' where students.edu_mail='$edu_mail'";

    // echo $sign_up_sql;
    $sign_up_query = mysqli_query($con,$sign_up_sql);

    if($sign_up_query){
        header("location:login.php");
    }



}else{
    echo "Email not found";
}



// echo $sql;


