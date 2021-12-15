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
    <div class="forget">
    <h3>Password Reset</h3>
    <label>To reset your password, please enter your email address or username below</label><br><br>
    <input type="text"  style="width:40%;" placeholder="Enter your username or E-mail"><br><br>
   <!--  <a class="forget-a" href = "#">Reset my password</a> -->
    <button style="background-color: green;color: white; padding: 10px; border-radius: 5px;" onclick="myFunction()">Reset my password</button><br><br>

<script>
function myFunction() {
  alert("check your mail.");
}
</script>
    </div>

</body>
</html>