<?php 

include_once './de_connect.php';


$name = $_POST['name'];
$email = $_POST['email'];
$date_of_bath = $_POST['date_of_bath'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name,email,date_of_birth,password) VALUES ('$name','$email','$date_of_bath','$password')";

echo $sql;

$query = mysqli_query($con,$sql);

if($query){
    header('location:user-sign-up.php');
}

