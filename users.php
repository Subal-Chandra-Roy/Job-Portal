<?php
    include("dbconnection.php");
    $sql="SELECT * FROM user_info";
    $run=mysqli_query($conn,$sql);
    $id;
    $fname="";
    $lname="";
    $email="";
    $password="";

    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin dashboard.css">
</head>
<body>
    <div class="admin">
        <div class="left">
            <a href="index.php"><img src="logo.png" alt=""></a>
            <img src="admin icon.png" alt="">
            <h2 id="ad">Admin</h2>
            <a href="logout.php"><button id="logout">Logout</button></a><br><br>
            <p ><a href="admin dashboard.php">Job Post Request</a></p>
            <p ><a href="available job.php">Avaiable Jobs</a></p>
            <p ><a href="users.php">Users</a></p>
        </div>
        <div class="request">
            <h1>Current Users</h1>

        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Update</th>
            </tr>
            <?php
            while($data=mysqli_fetch_assoc($run)){
                $id=$data['id'];
                $fname=$data['fname'];
                $lname=$data['lname'];
                $email=$data['email'];
                $password=$data['password'];
            ?>
            <tr>
                <td><?php echo($fname);?></td>
                <td><?php echo($lname);?></td>
                <td><?php echo($email);?></td>
                <td><?php echo($password);?></td>
                <td style="background-color:red;"> <a href="delete user.php?id=<?php echo($id);?>" onclick='return checkdelete()' >DELETE</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure to delete this user?');
            }
        </script>
        </div>
        
    </div>
</body>
</html>