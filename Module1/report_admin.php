<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>UMP Parcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
	<link rel="stylesheet" href="CSS/admin_css.css">
	<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print">

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
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>Report</b></h1><br>
		
			<!-- Admin -->
			<table>
				 <tr>
					<th colspan="5" style="center">Admin</th>
				</tr>
				<tr>
					<th>#</th>
					<th>User ID</th>
					<th style="width: 40%">Username</th>
					<th>Date created</th>
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
					<td><?php echo ($row['date_created']) ?></td>
				</tr>	
					<?php endwhile; ?>
			</table><br>
			
			<p><b>Total User: </b><span>
			<?php
				echo $conn->query("SELECT * FROM admin")->num_rows;
			?>
			</span></p>
	
		</center>
		</div>
	</div>
</div>

<center>
<div class="container">
		<div>
			<input type="button" value="Print" onclick="window.print();" id="print-btn">
			<br><br><br>
			<a href="user_list_report.php" class="view"><b>BACK</b></a>
		</div>
</div>
</center>

<div class="footer">
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>