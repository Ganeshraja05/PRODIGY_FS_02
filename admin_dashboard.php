<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System - Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Add some basic styling to the table */
        .admin-dashboard-table {
            border-collapse: collapse;
            width: 100%;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
        .admin-dashboard-table thead {
            background-color: #f0f0f0;
            border-bottom: 1px solid #ddd;
        }
        .admin-dashboard-table th, .admin-dashboard-table td {
            padding: 10px;
            text-align: left;
        }
        .admin-dashboard-table th {
            font-weight: bold;
        }
        .admin-dashboard-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .admin-dashboard-table tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employee Management System - Admin Dashboard</h2>
        <h3>Admin Operations</h3>

        <!-- Create Employee Form -->
        <form method="POST" action="create_employee.php">
            <h3>Create Employee</h3>
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
            <input type="submit" name="create_employee" value="Create Employee" class="btn btn-primary">
        </form>

        <!-- List Employees -->
        <h3>All Employees</h3>
        <table class="admin-dashboard-table table table-striped table-bordered">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Salary</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "employee_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $result = $conn->query("SELECT * FROM employees");
                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                  
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td>
                        <a href="delete_employee.php?id=<?php echo $row['id']; ?>">Delete</a> |
                        <a href="edit_employee.php?id=<?php echo $row['id']; ?>">Edit</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>