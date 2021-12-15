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
<h3 style="text-align: center;margin-top: 50px;margin-bottom: 0px;">Sign-in</h3><br><br>
   <form class="login" action="index.php">
   	<div class="login-text">
   	<label>Username or E-mail *</label><br><br>
   	<input type="text" required><br><br>
   	<label>Password *</label><br><br>
   	<input type="password" required><br><br>
   	<input type="checkbox">
   	<label>Keep me signed in</label><br><br>
<button style="background-color: green;color: white;" onclick="myFunction()">Login</button><br><br>

<script>
function myFunction() {
  alert("Logged in successfully");
}
</script>

    <a href="forget.php">Forget Password</a>
    <div>
    	<p>Want to create new account?<h4>Sign-up below<h4></p>
    	<a href="sign-up.php">Sign-up</a>
    </div>
   </div>

   </form>


 <!--   <h3 style="text-align: center;margin-top: 50px;margin-bottom: 0px;">Sign-in Customer</h3><br><br> -->
<!--    <form class="login" action="index.php">
 
   	<div class="login-text">
   		<label>Username or E-mail *</label><br><br>
   	<input type="text" required><br><br>
   	<label>Password *</label><br><br>
   	<input type="password" required><br><br>
   	<input type="checkbox">
   	<label>Keep me signed in</label><br><br>


<button style="background-color: green;color: white;" onclick="myFunction()">Login</button><br><br>

<script>
function myFunction() {
  alert("Logged in successfully");
}
</script>

    <a href="forget.php">Forget Password</a>
    <div>
    	<p>Want to create new account?<h4>Sign-up below<h4></p>
    	<a href="#">Owner</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#">Customer</a>
    </div>
   </div>
   </form> -->
</body>
</html>