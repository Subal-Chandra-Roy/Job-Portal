<?php
    include("dbconnection.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM request_for_job_post WHERE id='$id'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
    $company_name=$data['company_name'];
    $email=$data['email'];
    $category=$data['category'];
    $job_title=$data['job_title'];
    $job_nature=$data['job_nature'];
    $location=$data['job_location'];
    $job_description=$data['job_description'];
    $sql = "INSERT INTO available_job_post(company_name,email,category,job_title,job_nature,job_location,job_description) VALUES('$company_name','$email','$category','$job_title','$job_nature','$location','$job_description')";
    $sql2="DELETE FROM request_for_job_post WHERE id='$id'";
    $run = mysqli_query($conn,$sql);
    $run = mysqli_query($conn,$sql2);
    header("Location:admin dashboard.php");
?>