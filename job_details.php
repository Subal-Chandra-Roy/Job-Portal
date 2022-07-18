
<?php
    include("dbconnection.php");
        $pdf_name=$_GET['name'];
        $sql="SELECT * FROM available_job_post WHERE job_description='$pdf_name'";
        $run=mysqli_query($conn,$sql);
        $data=mysqli_fetch_array($run);
?>
<html>
    <head>
        <title>Job Details</title>
    </head>
    <embed type="application/pdf" src="Uploads_pdf/<?php echo $data['job_description'];?>" width="100%" height="700">
</html>
