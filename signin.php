<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailOrPhone = $_POST['phoneNumber-email'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($emailOrPhone) || empty($password)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Simulate a successful login (replace with actual authentication logic)
    if ($emailOrPhone === "user@example.com" && $password === "password123") {
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
}
?>
