<?php include('config.php') ?>

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

#col{
	text-align: right;
}

#edit {
	background: green;
	padding: 3px;
}

#trash {
	background: red;
	padding: 3px;
}

table, tr, th, td
{
	border: 3px solid black;
	border-collapse: collapse;
	padding: 10px;
}

th
{
	background-color: black;
	color: white;
	font-weight: bold;
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
	<div class="row">
		<div class="column">
		<center>
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>List of User</b></h1><br>
		
		<!-- ADMIN -->
			<table>
				 <tr>
					<th colspan="5" style="center">Admin</th>
				</tr>
			    <tr>
					<th colspan="5"><div id="col"><a href="user_create.php"><i class="fa fa-plus"></i> Add New</a></div></th>
				</tr>
				<tr>
					<th>#</th>
					<th>User ID</th>
					<th style="width: 60%">Username</th>
					<th colspan="2">Action</th>
				</tr>
					<?php
					$i = 1;
					$sql = $conn->query("SELECT * FROM admin order by admin_ID asc ");
					while($row= $sql->fetch_assoc()):
					?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo ($row['admin_ID']) ?></td>
					<td><?php echo ucwords($row['admin_name']) ?></td>
					<td>
							<a href="update_admin.php?id=<?php echo $row['admin_ID']; ?>"><i class="fa fa-edit"></i></a>
					</td>
					<td>
							<a href="action_delete.php?deleteA=<?php echo $row['admin_ID']; ?>"><i class="fa fa-trash"></i></a>
					</td>
				</tr>	
					<?php endwhile; ?>
			</table><br>
			
		<!-- OFFICER -->
			<table>
				 <tr>
					<th colspan="5" style="center">Officer</th>
				</tr>
			    <tr>
					<th colspan="5"><div id="col"><a href="user_create.php"><i class="fa fa-plus"></i> Add New</a></div></th>
				</tr>
				<tr>
					<th>#</th>
					<th>User ID</th>
					<th style="width: 60%">Username</th>
					<th colspan="2">Action</th>
				</tr>
					<?php
					$i = 1;
					$sql = $conn->query("SELECT * FROM officer order by officer_ID asc ");
					while($row= $sql->fetch_assoc()):
					?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo ($row['officer_ID']) ?></td>
					<td><?php echo ucwords($row['officer_name']) ?></td>
					<td>
							<a href="update_officer.php?id=<?php echo $row['officer_ID']; ?>"><i class="fa fa-edit"></i></a>
					</td>
					<td>
							<a href="action_delete.php?deleteO=<?php echo $row['officer_ID']; ?>"><i class="fa fa-trash"></i></a>
					</td>
				</tr>	
					<?php endwhile; ?>
			</table><br>
			
		<!-- WARDEN -->
			<table>
				 <tr>
					<th colspan="5" style="center">Warden</th>
				</tr>
			    <tr>
					<th colspan="5"><div id="col"><a href="user_create.php"><i class="fa fa-plus"></i> Add New</a></div></th>
				</tr>
				<tr>
					<th>#</th>
					<th>User ID</th>
					<th style="width: 60%">Username</th>
					<th colspan="2">Action</th>
				</tr>
					<?php
					$i = 1;
					$sql = $conn->query("SELECT * FROM warden order by warden_ID asc ");
					while($row= $sql->fetch_assoc()):
					?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo ($row['warden_ID']) ?></td>
					<td><?php echo ucwords($row['warden_name']) ?></td>
					<td>
							<a href="update_warden.php?id=<?php echo $row['warden_ID']; ?>"><i class="fa fa-edit"></i></a>
					</td>
					<td>
							<a href="action_delete.php?deleteW=<?php echo $row['warden_ID']; ?>"><i class="fa fa-trash"></i></a>
					</td>
				</tr>	
					<?php endwhile; ?>
			</table><br>
			
			<!-- STUDENT -->
			<table>
				 <tr>
					<th colspan="5" style="center">Student</th>
				</tr>
			    <tr>
					<th colspan="5"><div id="col"><a href="user_create.php"><i class="fa fa-plus"></i> Add New</a></div></th>
				</tr>
				<tr>
					<th>#</th>
					<th>User ID</th>
					<th style="width: 60%">Username</th>
					<th colspan="2">Action</th>
				</tr>
					<?php
					$i = 1;
					$sql = $conn->query("SELECT * FROM student order by stud_ID asc ");
					while($row= $sql->fetch_assoc()):
					?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo ($row['stud_ID']) ?></td>
					<td><?php echo ucwords($row['stud_name']) ?></td>
					<td>
							<a href="update_student.php?id=<?php echo $row['stud_ID']; ?>"><i class="fa fa-edit"></i></a>
					</td>
					<td>
							<a href="action_delete.php?deleteS=<?php echo $row['stud_ID']; ?>"><i class="fa fa-trash"></i></a>
					</td>
				</tr>	
					<?php endwhile; ?>
			</table><br>
		</center>
		</div>
	</div>
</div>

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
