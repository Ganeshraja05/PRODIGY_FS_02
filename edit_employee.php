<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Employee Data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);
    $employee = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System - Edit Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Employee Management System - Edit Employee</h2>
        <form method="POST" action="update_employee.php">
            <h3>Edit Employee</h3>
            <input type="hidden" name="id" value="<?php echo $employee['id']; ?>"><br>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $employee['name']; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $employee['email']; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" value="<?php echo $employee['position']; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" value="<?php echo $employee['age']; ?>" required class="form-control">
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" name="salary" value="<?php echo $employee['salary']; ?>" required class="form-control">
            </div>
            <input type="submit" name="update_employee" value="Update Employee" class="btn btn-primary">
        </form>
    </div>
</body>
</html>