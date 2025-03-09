<?php
$servername = "localhost";  // Change if necessary
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "fundflow";       // Database name

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create Database
    $conn->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    $conn->exec("USE $dbname");
    
    // Create Users Table
    $conn->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(15) NOT NULL,
        country VARCHAR(50) NOT NULL,
        coupon_code VARCHAR(50) NOT NULL,
        password_hash VARCHAR(255) NOT NULL,
        used_coupon TINYINT(1) DEFAULT 0
    )");

    echo "Database and table created successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>￼Enter
