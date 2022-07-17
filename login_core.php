<?php
    session_start();
    include("dbconnection.php");
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    if($email=='admin@gmail.com'&& $pass=='1234'){
        header("location:admin dashboard.php");
    }
    else{

        $query = "SELECT * FROM user_info where email='$email' AND  password='$pass'";
        $run = mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0){
            $_SESSION['email']=$email;
            $_SESSION['password']=$pass;
            $data=mysqli_fetch_assoc($run);
            $_SESSION['username']=$data['username'];
            header("Location:index.php");
        }
        else{
            $_SESSION['invalid']="invalid";
             header("Location:login.php");
        }
    }
?>
