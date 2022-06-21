<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_portal";

    $conn = mysqli_connect($server,$username,$password,$dbname,4306);
    if($conn==false){
        echo "failed to connect";
    }
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $sql = "insert into Comment (name,email,comment) values('$name','$email','$comment')";
    if(mysqli_query($conn,$sql)){
        echo "Data submitted successfully";
    }
?>