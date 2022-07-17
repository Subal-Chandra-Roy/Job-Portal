<?php
    include("dbconnection.php");
    $id=$_GET['id'];
    $sql="DELETE FROM user_info WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:users.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>