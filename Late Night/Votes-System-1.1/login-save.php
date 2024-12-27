<?php

require_once("./sql-connection.php");

echo "<pre>";


print_r($_POST);

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from users where email='$email' and password='$password'";

$query = mysqli_query($con, $sql);

$student = mysqli_fetch_assoc($query);

if ($student) {
    $endPoint = "profile.php?id=" . $student['id'];
    header("location:$endPoint");
} else {
    echo "<script>
        alert(`Please check your username and password and try again. If you've forgotten your password, use the 'Forgot Password' link.`);
        location.href='./login.php';
    </script>";
}
