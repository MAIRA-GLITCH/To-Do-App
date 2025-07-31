<?php
require 'connection.php';


if (isset($_POST['reg'])) {

    $newname = $_POST['user_name'];

    $newemail = $_POST['user_email'];

    $newpassword = $_POST['user_password'];


    $register_query = mysqli_query($conn, "INSERT INTO   user_data values ('','$newname','$newemail','$newpassword')");

    if ($register_query) {
        header('location: login.php');
        exit;
    } else {
        echo 'check code';
    }
}
