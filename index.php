<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>UMP Parcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
	<link rel="stylesheet" href="Module1/CSS/admin_css.css">
</head>
	
<body>
<!-- Header -->
<div class="header">
	<div class="row">
		<div class="column-33">
			<img src="Module1/Images/ump_parcel_logo3.png" width="200" height="200">
		</div>
		<div class="column-33">
			<h1>UMP Parcel</h1>
			<p>Your parcels made easy</p>
		</div>
	</div>
</div>

<!-- Content -->
<!-- all buttons section -->
<br><br>
<center>
<div>
	<form action="Module1/action_login.php" method="post">
		<div class="container">
			<input type="text" placeholder="Enter Username" name="user_ID" required> <br>
			<input type="password" placeholder="Enter Password" name="password" required> <br>
			<select id="user_type" name="user_type" required> 
				<option selected>Category</option>
				<option value="student">Student</option>
				<option value="warden">Warden</option>
				<option value="officer">Officer</option>
				<option value="admin">Admin</option>
			</select><br>
			<button type="submit" name="submit">Login</button> <br>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label> <br>
		</div>
		<div class="container" style="background-color:#f1f1f1">
			<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	</form>
</div>
</center> 
<br><br>

<!-- all buttons section -->
<center
<div class="container" style="background-color:#F2AA4CFF">
      <h1 class="large-font" style="color:white;"><b>Contact Us</b></h1>
	  
	  <h1 class="large-font" style="color:white;"><b>Address</b></h1>
      <p>Universiti Malaysia Pahang, <br>26600 Pekan Pahang, <br>MALAYSIA</p>
	  
	  <h1 class="large-font" style="color:white;"><b>Phone Number</b></h1>
      <p><a>09-424 5600 (P)</a></p>
	  <p><a>09-549 3131 (G)</a></p>
	  
	  <h1 class="large-font" style="color:white;"><b>Email</b></h1>
      <p>pro@ump.edu.my</p>
</div>
</center>

<div class="footer">
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>

