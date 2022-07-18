<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a job</title>
    <link rel="stylesheet" href="post a job.css">
</head>
<body>
<?php
    
    if(isset($_SESSION['upload'])){
        unset($_SESSION['upload']);
        ?>
        <script>
            alert("Successfully submited the  job post\nYour post will be uploaded within 24 hours");
        </script>
        <?php
    }
    if(isset($_SESSION['size'])){
        unset($_SESSION['size']);
        ?>
        <script>
            alert("Pdf size is too large");
        </script>
        <?php
    }
    if(isset($_SESSION['not_pdf'])){
        unset($_SESSION['not_pdf']);
        ?>
        <script>
            alert("Please select a Pdf file");
        </script>
        <?php
    }
    if(isset($_SESSION['error'])){
        unset($_SESSION['error']);
        ?>
        <script>
            alert("An unknown error occured");
        </script>
        <?php
    }
    ?>
    <div class="job">
        <h1>Please fill out the following form to post a job</h1>
        <a href="index.php"> <button id="btn">Home</button></a>
        <form action="post a job core.php" method="POST" enctype="multipart/form-data">
            
            <p>Company/Institute Name:</p>
            <input type="text" name="company_name" placeholder="company name" required>
            <p>Email:</p>
            <input type="email" name="email" placeholder="abc@gmail.com" required>
            <p>Job title:</p>
            <input type="text" name ="job_title" placeholder= "job title" required>
            <p>Category:</p>
            <select name="category" id="category">
                <option value="IT">IT</option>
                <option value="Bank">Bank</option>
                <option value="Teaching">Teaching</option>
                <option value="Engineering">Engineering</option>
                <option value="Administrative">Administrative</option>
                <option value="Human Services">Human Services</option>
                <option value="Manufacturing">Manufacturing</option>
            </select>
            <p>Job Nature:</p>
            <select name="job_nature" id="jobnature">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                
            </select>
            <p>Job Location:</p>
            <input type="text" name="location" placeholder="location" required>
            <p>Job Description(.pdf):</p>
            <input type="file" name="job_description" required>
            <br>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>