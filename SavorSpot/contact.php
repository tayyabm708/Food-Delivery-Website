<?php
$showAlert = false;
$showError = false;
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO `contact` ( `name`, `email`, `phno`, `feedback`) VALUES ('$name', '$email', '$phno', '$feedback')";
        $result = mysqli_query($conn, $sql);

        if ($result){
            $showAlert = true;
            
        }
        else{
            $showError = "Feedback not Sent";
    }
    }

    
if($showError){
    echo '<script>alert("Feedback not Sent")</script>';
}

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLOOWOWOWO</title>
    <script type="text/javascript">
        function showAlertAndRedirect(message, redirectUrl) {
            alert(message);
            window.location.href = redirectUrl;
        }
    </script>
</head>
<body>
    <?php
    if($showAlert){
        echo '<script type="text/javascript">',
             'showAlertAndRedirect("Feedback sent successfully", "index.html");',
             '</script>';
    }

    if($showError){
        echo '<script>alert("Feedback not sent")</script>';
    }
    ?>
    <!-- Your HTML form goes here -->
</body>
</html>