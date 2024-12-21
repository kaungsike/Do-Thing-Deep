<?php


include("./sql-connection.php");


// echo "<pre>";

// print_r($_POST);


$name = $_POST['name'];
$edu_mail = $_POST['edu_mail'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];


$sql = "select * from students where edu_mail='$edu_mail'";

// echo $sql;

$query = mysqli_query($con, $sql);

$data = mysqli_fetch_assoc($query);

// print_r($data);

// echo $data['password'];

// var_dump($data['password']);

// die();

if ($data) {

    if ($data['password'] !== NULL && $data['password'] !=="") {
        echo "<script>
        alert('This edu mail already has an account.');
        window.location.href = 'sign-up.php';
    </script>";
    } else {

        $sign_up_sql = "update students set name='$name',password='$password' where students.edu_mail='$edu_mail'";

        // echo $sign_up_sql;
        $sign_up_query = mysqli_query($con, $sign_up_sql);

        if ($sign_up_query) {

            echo "<script>
            alert('Sign up successful.');
            location.href='login.php';
            </script>";
        }
    }
} else {
    echo "Email not found";
}



// echo $sql;
