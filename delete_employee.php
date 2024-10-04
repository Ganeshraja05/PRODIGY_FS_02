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

// Handle Delete Employee
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM employees WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted!";
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>