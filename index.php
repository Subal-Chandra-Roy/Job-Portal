<?php
    session_start();
    $signup="Sign Up";
    $login="Login";
    if(isset($_SESSION['email'])){
        $signup=""."{$_SESSION['username']}";
        $login="Log out";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs.com</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="titlebar">
        <a href="index.php"> <img src="logo.png" alt="logo"></a>
        <ul>
            <?php
                if($signup!="Sign Up"){
                ?>
                    <li><button class="b1"><a href="#"><?php echo($signup); ?></a></button></li>
                    <li><button class="b2"><a href="logout.php"><?php echo($login); ?></a></button></li>
            <?php
                }
                else{
                ?>
                    <li><button class="b1"><a href="signup.php">Sign Up</a></button></li>
                    <li><button class="b2"><a href="login.php">Log in</a></button></li>
                <?php
                }
            ?>
            
        </ul>
    </div>
    <div class="menubar">
        <ul>
            <li><a href="find job.php">Find Jobs</a></li>
            
            <li><a href="resume help.php">Resume Help</a></li>
            <li><a href="#">Upload Resume</a></li>
            <li><a href="career advice.php">Career Advice</a></li>
            <li><a href="post a job.php">Post a job</a></li> 
        </ul>
    </div>
    <div class="search">
        <h1>Find a career you'll love.</h1>
        <p style="margin-left: 28%;">Explore which careers have the highest job satisfaction, best salaries, and more</p>
        
                <form action="find job.php" class="searchbar">
                <select name="category" id="category">
                    <option value="All">All</option>
                    <option value="IT">IT</option>
                    <option value="Bank">Bank</option>
                    <option value="Teaching">Teaching</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Administrative">Administrative</option>
                    <option value="Human Services">Human Services</option>
                    <option value="Manufacturing">Manufacturing</option>
                </select>
                <input type="text" name="location" placeholder="location" id="location">
                <input type="submit" value="search" id="icon" name="search">
                </form>
    </div>
    <div class="job">
        <img src="job.jpg" alt="job">
        <div>
        <h2>We're not your typical<br> job site</h2>
        <p>Jobs is different and makes it easier to find your <br>next great opportunity</p>
    </div>
    </div>
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
        <div>
        <p>Need any support? Call to <b style="font-size: 20px; color: brown;">01700000000.</b>  Our Contact Center is avaiable from 10 am to 8 pm (Saturday to Thursday).</p>
        </div>
    </div>
</body>
</html>