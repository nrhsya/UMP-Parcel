<!DOCTYPE html>
<html lang="en">

<head>
	<title>UMP Parcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
	<link rel="stylesheet" href="CSS/admin_css.css">
	
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

table, tr, th, td
{
	border: 3px solid black;
	border-collapse: collapse;
	padding: 5px;
}

th
{
	background-color: black;
	color: white;
	font-weight: bold;
}

p
{
	font-size: 10px;
	font-weight: bold;
	color: black;
	letter-spacing: 3px;
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
<div class="container">
	<center>
		<h1 class="xlarge-font" style="color:black"><b>Create new user</b></h1>
	
		<div class="table">
			<form action="action_create.php" method="post">
				<input type="text" name="user_ID" placeholder="ID.." required>
				<input type="text" name="user_name" placeholder="Full Name.." required>
				<select id="category" name="user_type" required>
					<option value="" placeholder="Category.."></option>
					<option value="student">Student</option>
					<option value="warden">Warden</option>
					<option value="officer">Officer</option>
					<option value="admin">Admin</option>
				</select>
				<input type="password" name="password" placeholder="Password.." required>
				<button type="submit" name="create">Create</button>
				<br><br>
			</form>
		</div>
		
		<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "none"){
				echo "<p><b>Successfully created!</b></p>";
			}
		}
		?>
		<br><br><br>
		<a href="user_list.php" class="view"><b>View User List</b></a>
		
	</center>
</div>

<div class="footer">
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>















































