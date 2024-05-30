<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}

// if($showAlert){
//     echo '<script>alert("Account created successfully. Now you can login")</script>';
// }

if($showError){
    echo '<script>alert("Passwords donot match")</script>';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
             'showAlertAndRedirect("Account created successfully. Now you can login", "signin.html");',
             '</script>';
    }

    if($showError){
        echo '<script>alert("Passwords do not match")</script>';
    }
    ?>
    <!-- Your HTML form goes here -->
</body>
</html>

