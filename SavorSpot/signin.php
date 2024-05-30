<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo '<script>alert("Login Successfull")</script>';
        header("location: index.html");
        
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    
</head>
<body>
    <?php
    if ($showError) {
        echo '<script>alert("Invalid Credentials")</script>';
        
    }
    if($login){
        echo '<script>alert("Login Successfull")</script>';
    }

    ?>
    <!-- Your login form goes here -->
</body>
</html>