<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $coupon = $_POST['coupon'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if the coupon has been used
    $stmt = $conn->prepare("SELECT * FROM users WHERE coupon_code = ?");
    $stmt->execute([$coupon]);
    if ($stmt->rowCount() > 0) {
        echo "Coupon code already used!";
        exit;
    }

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone, country, coupon_code, password_hash, used_coupon) VALUES (?, ?, ?, ?, ?, ?, 1)");
    if ($stmt->execute([$username, $email, $phone, $country, $coupon, $password])) {
        echo "Signup successful!";
    } else {
        echo "Error: Signup failed.";
    }
}
?>￼Enter
