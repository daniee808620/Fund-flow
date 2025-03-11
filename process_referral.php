<?php
$servername = "localhost"; // Change if needed
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "fundflow"; // Your database name

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get referrer from POST request
if (isset($_POST['referrer'])) {
    $referrer = $_POST['referrer'];

    // Check if user exists
    $sql = "SELECT balance FROM users WHERE username='$referrer'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, update balance
        $conn->query("UPDATE users SET balance = balance + 400 WHERE username='$referrer'");
        echo "Referral bonus added.";
    } else {
        echo "Referrer not found.";
    }
}

$conn->close();
?>￼Enter
