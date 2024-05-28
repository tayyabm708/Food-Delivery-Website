<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    // Perform any necessary actions, such as sending an email or storing data in a database
    // For demonstration purposes, we'll simply print the received data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone Number: " . $phoneNumber . "<br>";
    echo "Message: " . $message . "<br>";

    // You can add further processing here, such as sending emails or storing data in a database
}
?>
