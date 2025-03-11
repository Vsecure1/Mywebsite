<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT login_table.* FROM `login_table` WHERE login_table.email='$email'");
        if (TRUE) {
            header("Location: ../templates/onboarding.html");
            exit();
        } else {
            echo "Verification failed!";
        }
    }
    ?>
    
</body>
</html>