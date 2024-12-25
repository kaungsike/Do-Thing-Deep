<?php

include("./sql-connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$year = $_POST['year'];
$semester = $_POST['semester'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$unique_key = $_POST['unique_key'];

$sql = "SELECT * FROM already_users WHERE unique_key='$unique_key'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);

if ($data) {
    echo "<script>
        alert('This device already has an account.');
        location.href = './login.php';
    </script>";
    exit;
}

$sql_is_email_exist = "SELECT * FROM users WHERE email='$email'";
$query_is_email_exist = mysqli_query($con, $sql_is_email_exist);
$data_is_email_exist = mysqli_fetch_assoc($query_is_email_exist);

if ($data_is_email_exist) {
    echo "<script>
        alert('This email already has an account.');
        location.href = './login.php';
    </script>";
    exit;
}

if ($password !== $confirm_password) {
    echo "<script>
        alert('Password does not match.');
    </script>";
    exit;
}

mysqli_begin_transaction($con);

try {

    $sql_add_key = "INSERT INTO already_users (unique_key) VALUES ('$unique_key')";


    if (!mysqli_query($con, $sql_add_key)) {
        throw new Exception("Failed to insert unique key: " . mysqli_error($con));
    }

    $unique_key_id = mysqli_insert_id($con);


    $sql_add_new_user = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `unique_key_id`, `ticket_for_king`, `ticket_for_queen`, `years_id`, `semester_id`, `gender_id`, `one_time_code`, `voted_king_id`, `voted_queen_id`, `created_at`) 
                         VALUES (NULL, '$name', '$email', '$password', $unique_key_id, 1, 1, $year, $semester, $gender, NULL, NULL, NULL, CURRENT_TIMESTAMP)";

    if (!mysqli_query($con, $sql_add_new_user)) {
        throw new Exception("Failed to insert new user: " . mysqli_error($con));
    }q

    mysqli_commit($con);

    echo "<script>
        alert('Account created successfully.');
        location.href = './login.php';
    </script>";

} catch (Exception $e) {

    mysqli_rollback($con);

    echo "<script>
        alert('Failed to create account: " . $e->getMessage() . "');
    </script>";
}
?>
