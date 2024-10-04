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
        <form method="POST" action="register_process.php">
            <h3>Employee Registration</h3>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" required class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </form>
    </div>
</body>
</html>