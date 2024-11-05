<?php

include_once './de_connect.php';
echo '<pre>';


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email='$email'";

$query = mysqli_query($con, $sql);

if ($query) {
    $array = mysqli_fetch_assoc($query);

    if ($array) {
        if($password==$array['password']){
            header("location:user-profile.php");
        }else{
            die ("Worng password");
        }
    } else {
        echo "Can't find your email";
        die();
    }
}
