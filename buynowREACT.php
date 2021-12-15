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
   <h3 style="text-align: center;margin-top: 50px;margin-bottom: 0px;">BuyNow</h3><br><br>
<form class="signup" action="index.php">
	<label>CourseName - </label>
	<label>REACT</label><br><br>
	<label>Course Prize - </label>
    <label>$70</label><br><br>
	<label>Materials Available :</label><br><br>
    <label>Vedios</label><br><br>
    <label>Study materials</label><br><br>
    <label>Question Bank</label><br><br>
	<button style="background-color: green;color: white;padding:10px;border-radius: 3px;" onclick="myFunction()">Confirm Buying</button><br><br>
<script>
function myFunction() {
  alert("Check your mail for verfication.");
}
</script>
</form>
</body>
</html>