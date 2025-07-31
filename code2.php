<?php
session_start();
require 'connection.php';

if (isset($_POST['login'])) {
    $lemail = $_POST['login_email'];
    $lpassword = $_POST['login_password'];

    $login = mysqli_query($conn, "SELECT * FROM user_data WHERE useremail = '$lemail' AND userpassword = '$lpassword'");

    if (mysqli_num_rows($login) > 0) {
            echo "Redirecting to dashboard...";
        $_SESSION['user'] = $lemail; // ✅ Fixed variable
        header('location:dashboard.php');
        exit;
    } else {
        header('location:login.php');
        exit;
    }
}
?>
