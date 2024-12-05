<?php 

require_once "./sql_connect.php";

// echo "<pre>";


// print_r($_GET);

$student_id = $_GET['student_id'];
$uni_enter_id = $_GET['uni_enter_id'];

$sql = "select * from users";

// echo $sql;

$query = mysqli_query($con,$sql);

while ($users = mysqli_fetch_assoc($query)){
    if($student_id==$users['uni_id'] && $uni_enter_id==$users['uni_entry_id']){
        echo $users['name'];
        header("location:user-home.php");
        die();
    }else{
        header("location:login-error.php");
    }
}


// die();

// if(count($users)!==null){
//     header('location:user-home.php');
// }else{
//     die("No user");
// }

?>