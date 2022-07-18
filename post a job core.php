<?php
    session_start();
    include("dbconnection.php");
    if(isset($_REQUEST['submit'])){
        $company_name = $_REQUEST['company_name'];
        $email = $_REQUEST['email'];
        $category = $_REQUEST['category'];
        $job_title = $_REQUEST['job_title'];
        $job_nature = $_REQUEST['job_nature'];
        $job_location = $_REQUEST['location'];

        $job_description=$_FILES['job_description']['name'];
        $pdf_size=$_FILES['job_description']['size'];
        $tmp_name=$_FILES['job_description']['tmp_name'];
        $error=$_FILES['job_description']['error'];
        $pdf_ex=pathinfo($job_description,PATHINFO_EXTENSION);
    

        if($error==0){
            if($pdf_size>5242880){//5MB
                $_SESSION['size']="true";
                header("Location:post a job.php");

            }else{
                $pdf_ex=pathinfo($job_description,PATHINFO_EXTENSION);
                if($pdf_ex=="pdf"){
                    $new_pdf_name=uniqid("PDF-",true).'.'.$job_description;
                    $pdf_upload_path='Uploads_pdf/'.$new_pdf_name;
                    move_uploaded_file($tmp_name,$pdf_upload_path);
                    $sql = "INSERT INTO request_for_job_post(company_name,email,category,job_title,job_nature,job_location,job_description) VALUES('$company_name','$email','$category','$job_title','$job_nature','$job_location','$new_pdf_name')";
                    $run = mysqli_query($conn,$sql);
                    $_SESSION['upload']="true";
                    header("Location:post a job.php");
                }
                else{
                    $_SESSION['not_pdf']="true";
                    header("Location:post a job.php");
                }
            }
        }else{
            $_SESSION['error']="true";
            header("Location:post a job.php");
        }
    }
    else{
        header("Location: post a job.php");
    }
    
?>