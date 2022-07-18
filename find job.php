<?php
    include("dbconnection.php");
    $company_name = "";
    $job_title = "";
    $location = "none";
    $category ='';
    $sql="";
    $run="";
    $count=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Jobs</title>
    <link rel="stylesheet" href="find job.css">
</head>
<body>
    <div class="search">
        <div class="image">
            <a href="index.php"><img src="logo.png" alt="image not found"></a>
        </div>
        
            
            <form method="POST" class="searchbar">
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
        
         <div class="button">
            <a href="index.php"><button id="bt">Home</button></a>
         </div>
    </div>
    <div class="left">
        
        <?php
            if(isset($_REQUEST['search'])){
            if(isset($_REQUEST['location'])){
                $location=$_REQUEST['location'];
                $category=$_REQUEST['category'];
                ?>
                <p margin-left="80px"><?php echo "You search for category: (".$category.") and location: (".$location.")";?></p>
                <?php
                if($category=="All"){
                    $sql="SELECT * FROM available_job_post WHERE job_location LIKE '%$location%'";
                }
                else{
                    $sql="SELECT * FROM available_job_post WHERE job_location LIKE '%$location%' AND category='$category'";
                }
            }
            else{
                $category=$_REQUEST['category'];
                if($category=="All"){
                    $sql="SELECT * FROM available_job_post";
                }
                else{
                    $sql="SELECT * FROM available_job_post WHERE category='$category'";
                }
            }
        }
            else $sql="SELECT * FROM available_job_post";
            $run=mysqli_query($conn,$sql);
            if($run){
                //echo "Available post's for ".'"'.$_REQUEST['category'].'"'."<br><br>";
                while($data=mysqli_fetch_assoc($run)){
                    $company_name = $data['company_name'];
                    $job_nature = $data['job_nature'];
                    $location = $data['job_location'];
                    $job_title = $data['job_title'];
                    $count++;
                    ?>
                    <div class="card">
                    <br>
                    <p style="font-size: 21px;font-weight:bold;"><?php echo ($job_title)." [".($job_nature)."]" ?></p>
                    <p style="font-size: 19px;"><?php echo ($company_name) ?></p>
                    
                    <p><?php echo ($location) ?></p>
                    <a href="job_details.php?name=<?php echo($data['job_description']);?>"><p id='details'>Details</p></a>
                    </div>
                    <?php
                }
                if($count==0){
                ?>
                   <p margin-left="80px"><?php echo "No job post is availble for these search"; ?></p> 
                <?php
                }
            }
        ?>
    </div>
    <div class="right">
        <a href="index.php"><img src="logo.png" alt=""></a>
        <br><br><br><br><br><br><br><br><br>
        <h1>Get noticed by top employers!</h1>
        <p>Do you want to speed up your job search? Post your resume on JOBS and let employers know you’re open to opportunities. Plus, receive relevant job recommendations in your inbox.</p>
        <a href="upload resume.php"><button id="upload">Upload Your Resume</button></a>
    </div>


    <div class="bottom">
        <a href="index.php"><img src="logo.png" alt="logo"></a>
        <div class="left2">
             <ul>
                <li><a href="about us.php">About us</a></li>
                <li><a href="Work with us.php">Work with us</a></li>
                <li><a href="get in touch.php">Get in touch</a></li>
            </ul>
        </div>
        <div class="middle2">
            <ul>
                <li><a href="#">Employers</a></li>
                <li><a href="#">Employers blog</a></li>
            </ul>
        </div>
        <div class="right2">
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