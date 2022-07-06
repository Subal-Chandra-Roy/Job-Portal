<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_portal";

    $conn = mysqli_connect($server,$username,$password,$dbname);
    if($conn==false){
        echo "failed to connect";
    }
    else{
    if(isset($_REQUEST['name']) && isset($_REQUEST['email']) &&isset($_REQUEST['comment'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $comment = $_REQUEST['comment'];
        
        }
    $sql = $sql = "INSERT INTO comment (name,email,comment) VALUES('$name','$email','$comment')";
    $run = mysqli_query($conn,$sql);

   
    if($run){
        echo "Data submitted successfully";
    }
    }
?>