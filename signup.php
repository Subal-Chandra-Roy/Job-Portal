<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sign up</title>
	<link rel="stylesheet" href="signup.css">
</head>
<body>
	<div class="sign_up">
		<h1>Sign Up</h1>
		<form action="signup_core_page.php" method="POST">
			<?php
				if(isset($_SESSION['invalid_username'])){
					?>
					  <script>
						  alert("This 'username' is not available");
					  </script>
					  <?php 
					  unset($_SESSION['invalid_username']);
					  unset($_SESSION['invalid_email']);
				}
				else if(isset($_SESSION['invalid_email'])){
					?>
					  <script>
						  alert("This 'email' is not available");
					  </script>
					  <?php 
					  unset($_SESSION['invalid_username']);
					  unset($_SESSION['invalid_email']);
				}
				else if(isset($_SESSION['con_password']))
				{
					?>
					<script>
						alert("Confirm password did not match");
					</script>
					<?php 
					unset($_SESSION['con_password']);
				}
			?>
			<label>Username</label>
			<input type="text" name="username" placeholder="username" required>
			<label > First Name</label>
			<input type="text" name="fname" placeholder="first_name" required>
			<label>Last Name</label>
			<input type="text" name="lname" placeholder="last_name" required>
			<label>Email</label>
			<input type="email" name="email" placeholder="abc@gmail.com" required>
			<label>Password</label>
			<input type="text" name="password" placeholder="password" required>
			<label>Confirm Password</label>
			<input type="text" name="confirmpassword" placeholder="confirm password" required>
			<input type="submit" value="Sign Up">
		</form>
		<p>Already have an account?<a href="login.php"> Log in</a></p>
	</div>
	
</body>
</html>