
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $phoneNumber = $_POST['phoneNumber'];
    $otp = $_POST['otp'];
     $password = $_POST['password'];
     $birthday = $_POST['birthday'];
     $fullName = $_POST['fullName'];
    $exists=false;
    
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
   
}
    
?>