<?php
    include("dbconnection.php");
    $id=$_GET['id'];
    $sql="DELETE FROM available_job_post WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:available job.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>