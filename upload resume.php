<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:login.php");
}
?>
<html>
    <head>
        <title>Upload Resume</title>
        <link rel="stylesheet" href="upload resume.css">
    </head>
    <body>
       <?php
            if(isset($_SESSION['upload'])){
                unset($_SESSION['upload']);
                ?>
                <script>
                    alert("Resume Uploaded Successfully");
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
        
        <div class="top">
            <a href="index.php"> <button id="btn">Home</button></a>
           <h1>Upload Your Resume Here</h1>
        </div>
        <p>Resume(.pdf)</p>
        <form action="upload resume core.php" method ="POST" enctype="multipart/form-data">
            <input type="file" name="resume" required>
            <br>
            <input type="submit" name="submit" id="submit">
        </form>
    </body>
</html>