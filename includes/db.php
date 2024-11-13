<?php
$servername = "localhost"; // The default for the host / server name when running in the development environment
$port = "3306"; // Default port for MySQL
$username = "username"; // The username you set when you set up MySQL
$password = "your-password"; // The password you set when you set up MySQL
$dbname = "ktp_db"; // The name of the database you set when you ran the script for the database.

try {
    // Include the port in the DSN
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
