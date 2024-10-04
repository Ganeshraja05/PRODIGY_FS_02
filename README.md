# Employee Management System

## Overview
The **Employee Management System** is a web-based application designed to manage and organize employee data efficiently. This system allows the admin to add, edit, and delete employee records while also enabling employees to register and log in to the platform. The application is built using PHP and MySQL, with a responsive dashboard for the admin.

## Features
- **Admin Dashboard**: View all employees, add new employees, edit existing employee details, or delete employee records.
- **Employee Registration & Login**: Employees can register themselves and log in using credentials.
- **Database Management**: Secure and organized employee data storage with MySQL.
- **CRUD Operations**: Create, Read, Update, and Delete employee records.
  
## Technology Stack
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP/WAMP)

## File Structure
- `admin_dashboard.php`: Admin dashboard to manage employee records.
- `admin_login.php`: Admin login page.
- `admin_login_process.php`: Processes admin login credentials.
- `create_employee.php`: Form for creating a new employee record.
- `dashboard.php`: Displays the user/employee dashboard.
- `delete_employee.php`: Deletes an employee record.
- `edit_employee.php`: Form for editing an existing employee record.
- `employee_db.sql`: SQL file to set up the database schema.
- `index.php`: Main landing page of the application.
- `login.php`: Employee login page.
- `register.php`: Employee registration page.
- `register_process.php`: Processes employee registration data.
- `update_employee.php`: Processes employee data updates.

## Database Setup
1. Import the `employee_db.sql` file into your MySQL database.
2. Ensure that the database connection settings in the PHP files (if any) match your local server configuration.

## Installation
1. Clone or download the project files.
2. Place the project folder in your server directory (e.g., `htdocs` for XAMPP).
3. Import the `employee_db.sql` into your MySQL database.
4. Start the Apache and MySQL servers.
5. Access the system via `http://localhost/your_project_folder`.

## How to Use
1. **Admin Login**: Admins can log in via `admin_login.php` to access the admin dashboard.
2. **Employee Registration**: Employees can register through `register.php`.
3. **Employee Login**: Registered employees can log in via `login.php` to access their personal dashboard.

## License
This project is open-source. Feel free to modify and distribute.

