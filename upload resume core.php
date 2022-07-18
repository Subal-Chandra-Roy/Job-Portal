<?php
    session_start();
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];

    include("dbconnection.php");
    if(isset($_REQUEST['submit'])){

        $resume=$_FILES['resume']['name'];
        $pdf_size=$_FILES['resume']['size'];
        $tmp_name=$_FILES['resume']['tmp_name'];
        $error=$_FILES['resume']['error'];
        $pdf_ex=pathinfo($resume,PATHINFO_EXTENSION);
    

        if($error==0){
            if($pdf_size>5242880){//5MB
                $_SESSION['size']="true";
                header("Location: upload resume.php");
            }else{
                $pdf_ex=pathinfo($resume,PATHINFO_EXTENSION);
                if($pdf_ex=="pdf"){
                    $new_pdf_name=uniqid("PDF-",true).'.'.$resume;
                    $pdf_upload_path='Uploads_Resume/'.$new_pdf_name;
                    move_uploaded_file($tmp_name,$pdf_upload_path);
                    $sql = "INSERT INTO uploaded_resume(email,	resume) VALUES('$email',	'$new_pdf_name')";
                    $run = mysqli_query($conn,$sql);
                    if($run){
                        $_SESSION['upload']="true";
                    }
                    header("Location: upload resume.php");
                }
                else{
                    $_SESSION['not_pdf']="true";
                    header("Location: upload resume.php");
                }
            }
        }else{
            $_SESSION['error']="true";
            header("Location: upload resume.php");
        }
    }
    
?>