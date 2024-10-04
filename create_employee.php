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

// Handle Create Employee
if (isset($_POST['create_employee'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];

    $sql = "INSERT INTO employees (name, email, password, position, salary, age) VALUES ('$name', '$email', '$password', '$position', '$salary', '$age')";
    if ($conn->query($sql) === TRUE) {
        echo "Employee created!";
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
<form action="create_employee.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="position">Position:</label>
    <input type="text" id="position" name="position"><br><br>
    <label for="salary">Salary:</label>
    <input type="number" id="salary" name="salary"><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>
    <input type="submit" name="create_employee" value="Create Employee">
</form>