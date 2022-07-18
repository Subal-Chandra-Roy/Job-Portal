<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <?php
            if(isset($_SESSION['invalid'])){
              ?>
                <script>
                    alert("Invalid 'email' or 'password'");
                </script>
                <?php 
                unset($_SESSION['invalid']);
            }
            if(isset($_SESSION['signednow'])){
                ?>
                <script>
                    alert("You have been signed up successfull...please log in");
                </script>
                <?php
               unset($_SESSION['signednow']);
            }
        ?>
        <h1>Log in</h1>
        <form action="login_core.php" method ="post">
            <label>Email</label>
            <input type="email" name="email" placeholder="abc@gmail.com" required>
            <label>Password</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Login">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>