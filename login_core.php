<?php
    include("dbconnection.php");
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];

    $query = "SELECT * FROM user_info where email='$email' AND  password='$pass'";
    $run = mysqli_query($conn,$query);
    if(mysqli_num_rows($run)>0){
        header("Location:index.html");
    }
    else{
        echo "invalid 'email' or 'password'";
    }
?>
