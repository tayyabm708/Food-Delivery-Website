<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $phoneNumber = $_POST['phoneNumber'];
    $otp = $_POST['otp'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $fullName = $_POST['fullName'];

    // Here, you can perform validation and database operations
    // For simplicity, let's assume signup is successful
    $response = array(
        'success' => true,
        'message' => 'Sign up successful!'
    );

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // If request method is not POST
    $response = array(
        'success' => false,
        'message' => 'Invalid request method.'
    );

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
