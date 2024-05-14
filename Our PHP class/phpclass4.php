<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create database
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sql);
$conn->close();

// Create table
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
$conn->query($sql);
$conn->close();

// CRUD operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create operation
    if (isset($_POST["name"]) && isset($_POST["email"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        $conn->query($sql);
        $conn->close();
    }

    // Read operation
    if (isset($_POST["read"])) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
            }
        } else {
            echo "No users found.";
        }

        $conn->close();
    }

    // Update operation
    if (isset($_POST["update"]) && isset($_POST["id"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        $conn->query($sql);
        $conn->close();
    }

    // Delete operation
    if (isset($_POST["delete"]) && isset($_POST["id"])) {
        $id = $_POST["id"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "DELETE FROM users WHERE id=$id";
        $conn->query($sql);
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <h1>CRUD Operations</h1>

    <h2>Create User</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Create">
    </form>

    <h2>Read Users</h2>
    <form method="POST" action="">
        <input type="hidden" name="read" value="true">
        <input type="submit" value="Read">
    </form>

    <h2>Update User</h2>
    <form method="POST" action="">
        <label for="update-id">ID:</label>
        <input type="number" name="id" id="update-id" required><br>

        <label for="update-name">Name:</label>
        <input type="text" name="name" id="update-name" required><br>

        <label for="update-email">Email:</label>
        <input type="email" name="email" id="update-email" required><br>

        <input type="submit" name="update" value="Update">
    </form>

    <h2>Delete User</h2>
    <form method="POST" action="">
        <label for="delete-id">ID:</label>
        <input type="number" name="id" id="delete-id" required><br>

        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>