<!DOCTYPE html>
<html>
<head>
	<title>moveUforward</title>
	<link rel = "icon" href = "css/logo2.jpg" 
        type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>

	<?php 
   include("includes/header.php");
   ?>
   <h3 style="text-align: center;margin-top: 50px;margin-bottom: 0px;">Create Account</h3><br><br>
<form class="signup" action="index.php">
	<label>Username *</label><br><br>
	<input type="text" required><br><br>
	<label>E-mail Address *</label><br><br>
	<input type="text" required><br><br>
	<label>First Name *</label><br><br>
	<input type="text" required><br><br>
	<label>Last Name *</label><br><br>
	<input type="text" required><br><br>
	<label>Password *</label><br><br>
	<input type="password" required><br><br>
	<label>Confirm password *</label><br><br>
	<input type="text" required><br><br>
	<label>Mobile Number *</label><br><br>
	<input type="text" required><br><br>
	<button style="background-color: green;color: white;" onclick="myFunction()">Create Account</button><br><br>
    <p>Already have an account? <a href="login.php">Login here</a></p>
<script>
function myFunction() {
  alert("Account created successfully");
}
</script>
</form>

   <!-- <h3 style="text-align: center;margin-top: 50px;margin-bottom: 0px;">Create Account As Customer</h3><br><br>
<form class="signup" action="index.php">
	<label>Username *</label><br><br>
	<input type="text" required><br><br>
	<label>E-mail Address *</label><br><br>
	<input type="text" required><br><br>
	<label>First Name *</label><br><br>
	<input type="text" required><br><br>
	<label>Last Name *</label><br><br>
	<input type="text" required><br><br>
	<label>Password *</label><br><br>
	<input type="password" required><br><br>
	<label>Confirm password *</label><br><br>
	<input type="text" required><br><br>
	<label>Mobile Number *</label><br><br>
	<input type="text" required><br><br>
	<button style="background-color: green;color: white;" onclick="myFunction()">Create Account</button><br><br>
    <p>Already have an account? <a href="login.php">Login here</a></p>
<script> -->
<!-- function myFunction() {
  alert("Account created successfully");
}
</script>
</form> -->
</body>
</html>