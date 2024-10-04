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

// Handle Update Employee
if (isset($_POST['update_employee'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employees SET 
                name='$name', 
                email='$email', 
                position='$position', 
                age=$age, 
                salary=$salary 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee updated!";
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>