<?php
    session_start();

    include("dbconnection.php");
    
    $username=$_REQUEST['username'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $conpass = $_REQUEST['confirmpassword'];
   
    $query1="SELECT * FROM user_info WHERE username='$username'";
    $query2="SELECT * FROM user_info WHERE email='$email'";
    $run1=mysqli_query($conn,$query1);
    $run2=mysqli_query($conn,$query2);

    if(mysqli_num_rows($run1)>0){
        header("Location:signup.php");
        $_SESSION['invalid_username']="true";
    }
    else if(mysqli_num_rows($run2)>0){
        $_SESSION['invalid_email']="true";
        header("Location:signup.php");
    }
    else if($pass==$conpass){

        $sql = "INSERT INTO user_info (username,fname,lname,email,password) VALUES('$username','$fname','$lname','$email','$pass')";
        $run = mysqli_query($conn,$sql);
        if($run){

            $_SESSION['signednow']="true";
            header("Location:login.php");
        }
        else{
            echo "Invalid input";
        }
    }
    else{
        $_SESSION['con_password']="true";
        header("Location:signup.php");
    }
?>