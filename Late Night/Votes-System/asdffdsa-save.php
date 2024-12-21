<?php

include("./sql-connection.php");

echo "<pre>";

print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from admin where email='$email' and password='$password'";

$query = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($query);

if ($data) {
  header("location:asdffdsa-profile.php");
} else {
  header("location:asdffdsa-login-fail.php");
}
