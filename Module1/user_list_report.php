<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>UMP Parcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
	<link rel="stylesheet" href="CSS/admin_css.css" >
<style>	
.view {
	background-color: #F2AA4CFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
    text-decoration: none;
}
</style>
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
			<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>User Report List</b></h1><br>

			<input type="button" value="Admin" onclick="location.href='report_admin.php'">
			<input type="button" value="Officer" onclick="location.href='report_officer.php'">
			<input type="button" value="Warden" onclick="location.href='report_warden.php'">
			<input type="button" value="Student" onclick="location.href='report_student.php'">
		</div><br>
		<div>
			<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>User Chart List</b></h1><br>
			<input type="button" value="View chart" onclick="location.href='report_chart.php'">
		</div>
</div>
</center><br>

<center>
<div class="container">
		<div>
			<a href="admin_homepage.php" class="view"><b>BACK</b></a>
		</div>
</div>
</center>

<div class="footer">
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
