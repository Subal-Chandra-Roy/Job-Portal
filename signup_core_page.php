<?php

    include("dbconnection.php");
    
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $conpass = $_REQUEST['confirmpassword'];

    $sql = "INSERT INTO user_info (fname,lname,email,password) VALUES('$fname','$lname','$email','$pass')";
    $run = mysqli_query($conn,$sql);
    if($run){
        header("Location:registration successful.html");
    }
?>