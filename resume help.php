<?php
    include("dbconnection.php");
    $name="";  $email="";    $phone="";  $address="";    $linkedin="";   $profile="";
    $skill1="skill1"; $skill2="skill2"; $skill3="skill3";
    $level1="level"; $level2="level"; $level3="level";
    $language1="";  $language2="";
    $hobby="";
    $school_name=""; $start1="";$end1="";
    $college_name=""; $start2="";$end2="";
    $university_name=""; $start3="";$end3="";
    $post_name="";$company_name="";$duration="";
    $post_name2="";$company_name2="";$duration2="";

    $r_name="";$r_email="";$r_phone="";$pro="";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Help</title>
    <link rel="stylesheet" href="resume help.css">

    <!-- div to pdf convert-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
            function getPDF(){

                var HTML_Width = $(".right").width();
                var HTML_Height = $(".right").height();
                var top_left_margin = 15;
                var PDF_Width = HTML_Width+(top_left_margin*2);
                var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
                var canvas_image_width = HTML_Width;
                var canvas_image_height = HTML_Height;

                var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;


                html2canvas($(".right")[0],{allowTaint:true}).then(function(canvas) {
                    canvas.getContext('2d');
                    
                    console.log(canvas.height+"  "+canvas.width);
                    
                    
                    var imgData = canvas.toDataURL("image/jpeg", 1.0);
                    var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
                    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
                    
                    
                    for (var i = 1; i <= totalPDFPages; i++) { 
                        pdf.addPage(PDF_Width, PDF_Height);
                        pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
                    }
                    
                    pdf.save("HTML-Document.pdf");
                });
            };
    </script>

</head>
<body>
    <div class="title">
         <a href="index.php"> <img src="logo.png" alt="logo"></a>
        <p>Create Your Resume</p>
        <a href="index.php"><button id="home">Home</button></a>
    </div>
    <div class="resume">
        <div class="left">
            <h1>Personal Details</h1>
            <form method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="linkedin" placeholder="Linkedin">
            <input type="text" name="profile" placeholder="Profile Description">
            <br>
            <h1>Skills</h1>
            <label>1.</label>
            <input type="text" name="s1" placeholder="skill1">
            <label>level</label>
            <select name="l1">
                <option value="">level</option>
                <option value="Moderate">Moderate</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>

            </select>
            <br>
            <label>2.</label>
            <input type="text" name="s2" placeholder="skill2">
            <label>level</label>
            <select name="l2">
                <option value="">level</option>
                <option value="Moderate">Moderate</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>

            </select>
            <br>
            <label>3.</label>
            <input type="text" name="s3" placeholder="skill3">
            <label>level</label>
            <select name="l3">
                <option value="">level</option>
                <option value="Moderate">Moderate</option>
                <option value="Very Good">Very Good</option>
                <option value="Excellent">Excellent</option>

            </select>
            <br>
            <h1>Languages</h1>
            <label>language1</label>
            <input type="text" name="language1" placeholder="language1"><br>
            <label>language2</label>
            <input type="text" name="language2" placeholder="language2">
        
            <br>
            <h1>Hobbies</h1>
            <label>Hobby</label>
            <input type="text" name="hobby">
            <br>
            <h1>Education</h1>
            <h2>SSC</h2>
            <label for="">School Name</label>
            <input type="text" name="school_name"><br>
            <label>Start</label>
            <input type="text" name="start1" style="margin-left:63px;">
            <label style="margin-left:20px;">End</label>
            <input type="text" name="end1">
            <br>
            <h2>HSC</h2>
            <label for="">College Name</label>
            <input type="text" name="college_name"><br>
            <label >Start</label>
            <input type="text" name="start2" style="margin-left:69px;">
            <label style="margin-left:20px;">End</label>
            <input type="text" name="end2">
            <br>
            <h2>B.Sc</h2>
            <label for="">University Name</label>
            <input type="text" name="university_name"><br>
            <label>Start</label>
            <input type="text" name="start3" style="margin-left:85px;">
            <label style="margin-left:20px;">End</label>
            <input type="text" name="end3">

            <br>
            <h1>Employment</h1>
            <label for="">1.Post Name</label>
            <input type="text" name="post_name">
            <label for="">Company Name</label>
            <input type="text" name="company_name"><br>
            <label for="" style="margin-left:32px;">Duration</label>
            <input type="text" name="duration"><br><br>
            
            <label for="">2.Post Name</label>
            <input type="text" name="post_name2">
            <label for="">Company Name</label>
            <input type="text" name="company_name2"><br>
            <label for="" style="margin-left:32px;">Duration</label>
            <input type="text" name="duration2"><br>
            <br>
            <h1>References</h1>
            <label for="">Name</label>
            <input type="text" name="r_name" style="margin-left:5px;">
            <label for="" style="margin-left:20px;">Profession</label>
            <input type="text" name="pro"><br>
            <label for="">Phone</label>
            <input type="text" name="r_phone">
            <label for="" style="margin-left:56px;">Email</label>
            <input type="text" name="r_email"><br><br>
            <input type="submit" values="submit" name="submit" id="submit">
            </form>

        </div>
        <div class="right">
            <div class="left-top"></div>
            <div class="top">
                <div class="img">
                    <img src="resume_image.jpg" alt="No image">
                </div>
                <div class="personal_info">
                    <?php 
                    if(isset($_POST['submit'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    $linkedin=$_POST['linkedin'];
                    $profile=$_POST['profile'];
                    $school_name=$_POST['school_name'];
                    $college_name=$_POST['college_name'];
                    $university_name=$_POST['university_name'];
                    $start1=$_POST['start1'];$start2=$_POST['start2'];$start3=$_POST['start3'];                                       
                    $end1=$_POST['end1'];$end2=$_POST['end2'];$end3=$_POST['end3'];
                    $company_name=$_POST['company_name'];$post_name=$_POST['post_name'];$duration=$_POST['duration'];
                    $company_name2=$_POST['company_name2'];$post_name2=$_POST['post_name2'];$duration2=$_POST['duration2'];
                    
                    $r_name=$_REQUEST['r_name'];$r_email=$_REQUEST['r_email'];$pro=$_REQUEST['pro'];$r_phone=$_REQUEST['r_phone'];
                    }
                    ?>
                    <p id="name"><?php echo($name); ?></p>
                    <p>Email:  <?php echo($email); ?> </p>
                    <p>Phone:  <?php echo($phone); ?> </p>
                    <p>Address:   <?php echo($address); ?></p>
                    <p>Linkedin:   <?php echo($linkedin); ?></p>
                </div>
                
            </div>
            <div class="lf">
                <h1>SKILLS</h1>
                <?php
                if(isset($_POST['submit'])){
                //skills and language
                $skill1=$_POST['s1'];   $level1=$_POST['l1'];                
                $skill2=$_POST['s2'];   $level2=$_POST['l2'];                
                $skill3=$_POST['s3'];   $level3=$_POST['l3'];                
                $language1=$_POST['language1'];   $language2=$_POST['language2'];
                $hobby=$_POST['hobby'];

                //education

                }
                ?>
                <p>1. <?php echo $skill1.'['.$level1.']';?> </p>
                <p>2. <?php echo $skill2.'['.$level2.']';?> </p>
                <p>3. <?php echo $skill3.'['.$level3.']';?> </p>
                <h1>LANGUAGES</h1>
                <p><?php echo 'Fluent in '.$language1.' and '.$language2;?> </p>
                <h1>HOBBIES</h1>
                <p><?php echo($hobby);?></p>
            </div>
            <div class="rt">
                <h1>PROFILE</h1>
                <p><?php echo($profile); ?>
                    <!--I am an enthusiastic, 
                    self-motivated, reliable, responsible 
                    and hard working person. I am a mature 
                    team worker and adaptable to all 
                    challenging situations. I am able to 
                    work well both in a team environment as 
                    well as using own initiative. I am able 
                    to work well under pressure and adhere 
                    to strict deadlines.-->
                </p>

                <h1 style="margin-top:30px;">EDUCATION</h1>
                <div class="educatoin">
                <table style="border:2px solid; margin-left: 20px;" border="5px">
                    <tr>
                        <th>Exam/Degree</th>
                        <th>Institute Name</th>
                        <th>Start Year</th>
                        <th>Passing Year</th>
                    </tr>
                    <tr>
                        <th>SSC</th>
                        <td><?php echo($school_name);?></td>
                        <td><?php echo($start1);?></td>
                        <td><?php echo($end1);?></td>
                    </tr>
                    <tr>
                        <th>HSC</th>
                        <td><?php echo($college_name);?></td>
                        <td><?php echo($start2);?></td>
                        <td><?php echo($end2);?></td>
                    </tr>
                    <tr>
                        <th>B.Sc</th>
                        <td><?php echo($university_name);?></td>
                        <td><?php echo($start3);?></td>
                        <td><?php echo($end3);?></td>
                    </tr>
                </table>
                </div>
                <h1 style="margin-top:30px;">EMPLOYMENT</h1>
                <p><?php echo 'Post:'.$post_name;?></p>
                <p><?php echo 'Company Name:'.$company_name;?></p>
                <p><?php echo 'Duration:'.$duration;?></p><br>
                <p><?php echo 'Post:'.$post_name2;?></p>
                <p><?php echo 'Company Name:'.$company_name2;?></p>
                <p><?php echo 'Duration:'.$duration2;?></p>

                <h1 style="margin-top:30px;">References</h1>
                <p><?php echo $r_name;?></p>
                <p><?php echo $pro;?></p>
                <p><?php echo 'Phone:'.$r_phone;?></p>
                <p><?php echo 'Email:'.$r_email;?></p>
            </div>
        </div>
        <div class="button">
        <button id="button" onclick="getPDF()">Download</button>
        </div>
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