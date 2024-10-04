<?php
session_start();

// Handle Admin Login
if (isset($_POST['admin_login'])) {
    $admin_username = "admin";
    $admin_password = "admin123";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Incorrect admin credentials.";
    }
}
?>