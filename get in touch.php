<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get in touch</title>
    <link rel="stylesheet" href="get in touch style.css">
</head>
<body>
    <?php
        if(isset($_SESSION['success'])){
            unset($_SESSION['success']);
            ?>
            <script>
                alert("Thanks for your Comment");
            </script>
            <?php

        }
    ?>
    <div class="top">
         <a href="index.php"><img src="logo.png" alt="logo"></a>
         <button> <a href="index.php">Go to Home</a></button>
    </div>
    <div class="mid">
            <h1>Get in touch</h1>
            <h2>Questions, comments or conversation starters?</h2>
            <h3>We want to hear from you! Fill out the form below to send a note to the Jobs team.</h3>
    </div>
    <form action="get in touch core.php" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="comment" placeholder="Comment" required>
        <input type="submit" name="submit">
    </form>
    <div class="bottom">
        <a href="index.php"><img src="logo.png" alt="logo"></a>
        <div class="left">
             <ul>
                <li><a href="about us.php">About us</a></li>
                <li><a href="Work with us.php">Work with us</a></li>
                <li><a href="get in touch.php">Get in touch</a></li>
            </ul>
        </div>
        <div class="middle">
            <ul>
                <li><a href="#">Employers</a></li>
                <li><a href="#">Employers blog</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <li><a href="career advice.php">Career Advice</a></li>
                <li><a href="#">Get job in Bd</a></li>
            </ul>
        </div>
        <p style="margin-top: 260px;width: 80%;margin-left: 10%;color:rgb(203, 200, 195);">Need any support? Call to <b style="font-size: 20px; color: brown;">01700000000.</b>  Our Contact Center is avaiable from 10 am to 8 pm (Saturday to Thursday).</p>
    </div>
</body>
</html>