<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Employee Management System</h2>
        <form method="POST" action="login.php">
            <h3>Employee Login</h3>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <input type="submit" name="login" value="Login" class="btn btn-primary">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
        <p>Admin? <a href="admin_login.php">Admin Login</a></p>
    </div>
</body>
</html>