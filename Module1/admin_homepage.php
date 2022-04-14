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
	<link rel="stylesheet" href="CSS/admin_css.css">
</head>
	
<body>
<!-- Header -->
<div class="header">
	<div class="row">
		<div class="column-33">
			<img src="Images/ump_parcel_logo3.png" width="200" height="200">
		</div>
		<div class="column-33">
			<h1>UMP Parcel</h1>
			<p>Your parcels made easy</p>
		</div>
	</div>
</div>

<!-- Navigation bar -->
<div class="navbar">
	<a href="admin_homepage.php" class="center">Home</a>
	<a href="discover.php" class="center">About</a>
	<a href="discover.php" class="center">Contacts</a>
	<a href="logout.php" class="right">Logout</a>
</div>

<!-- Content -->
<center>
<div class="container">
		<div>
			<p>Welcome To</p>
			<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>UMP Parcel</b></h1>
			<h1 class="large-font"><b>Keep track of <br> all your parcels <br> in one place</b></h1><br>

			<input type="button" value="User List" onclick="location.href='user_list.php'">
			<input type="button" value="User List Report" onclick="location.href='user_list_report.php'">
		</div>
</div>
</center>

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
