<?php


include("./sql-connection.php");


echo "<pre>";

print_r($_POST);


$name = $_POST['name'];
$edu_mail = $_POST['edu_mail'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];


$sql = "select * from students where edu_mail='segwgwe'";

$query = mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($query);

if($data){

    

}else{
    echo "No data";
}



// echo $sql;


