<?php
	include("../connect.php");
	
	$collectedListID = $_GET['getQR'];
	$query = "SELECT * FROM collectedList
				WHERE collectedListID='".$collectedListID."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$collectedListID = $row['collectedListID'];
		//$qr_code = $row['qr_code'];
		$goods_ID = $row['goods_ID'];
		$stud_ID = $row['stud_ID'];
		$stud_name = $row['stud_name'];
		$goods_collect_date = $row['goods_collect_date'];
		$goods_status = $row['goods_status'];
		$goods_status_date = $row['goods_status_date'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Generate QR Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../CSS/layout_css.css"> <!-- css -->

</head>

<style>
.dropdown 
{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn 
{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn 
{
  background-color: #F2AA4CFF;
  color: black;
}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #F2AA4CFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a 
{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover 
{
  background-color: black;
  color: white;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}

p.border
{
  border-style: solid;
  border-color: black;
  border-radius: 15px;
  background: black;
  padding: 10px;
  color: white;
  letter-spacing: 12px;
}

input[type=text], input[type=number], input[type=date]
{
  width: 100%;
  padding: 10px;
}

table, tr, th, td
{
	border-collapse: collapse;
	padding: 10px;
	text-align: center;
	border: 1px solid white;
}

th
{
	background-color: #F2AA4CFF;
	color: black;
	font-weight: bold;
	text-align: left;
}

td
{
	width: 80%;
}

tr:nth-child(even)
{
	background-color: #f6e3bc;
}

tr:nth-child(odd)
{
	background-color: #fcf6e9;
}

#butto
{
  background-color: #F2AA4CFF;
  border: none;
  color: black;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  width: 20%;
  font-weight: bold;
}

#butto:hover
{
  background-color: black;
  color: #F2AA4CFF;
}

</style>

<body>

<!-- Header -->
<div class="header">
	<div class="row">
		<div class="column-33">
			<img src="../Images/ump_parcel_logo3.png" width="200" height="300">
		</div>
		<div class="column-33">
			<h1>UMP Parcel</h1>
			<h2>WARDEN PAGE</h2>
		</div>
	</div>
</div>

<!-- Navigation bar -->
<div class="navbar">
  <a href="../warden_homepage.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="collected_list.php">View Collected List</a>
      <a href="collected_list_report.php">View Report</a>
    </div>
  </div> 
  <div style="float:right;" class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../../Module1/logout.php">Logout</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="column">
		<center>
		  <h1 class="xlarge-font" style="color:black"><b>Generate QR Code</b></h1>
		  <form name="GenerateQR" action="generateqr.php?getInfo=<?php echo $collectedListID ?>" method="POST"> <!-- add qr code into database + buat php file named generateqr -->
			  <table>
				<tr>
					<th>QR Code</th>
					<td><img style="margin:auto;" src="../Images/qr.png" width="250" height="250"></td>
				</tr>
				
				<tr>
					<th>Collected List ID</th>
					<td><input type="text" id="collectedListID" name="collectedListID" value="<?php echo $collectedListID ?>" disabled></td>
				</tr>
				
				<tr>
					<th>Goods ID</th>
					<td><input type="text" id="goods_ID" name="goods_ID" value="<?php echo $goods_ID ?>" readonly></td>
				</tr>
				
				<tr>
					<th>Collected Date</th>
					<td><input type="date" id="goods_collect_date" name="goods_collect_date" value="<?php echo $goods_collect_date ?>"></td>
				</tr>
				
				<tr>
					<th>Student ID</th>
					<td><input type="text" id="stud_ID" name="stud_ID" value="<?php echo $stud_ID ?>"></td>
				</tr>
				
				<tr>
					<th>Student Name</th>
					<td><input type="text" id="stud_name" name="stud_name" value="<?php echo $stud_name ?>"></td>
				</tr>
				
				<tr>
					<th>Goods Status</th>
					<td><input type="text" id="goods_status" name="goods_status" value="<?php echo $goods_status ?>"></td>
				</tr>
				
				<tr>
					<th>Status Changed Date</th>
					<td><input type="date" id="goods_status_date" name="goods_status_date" value="<?php echo $goods_status_date ?>"></td>
				</tr>
				
			</table><br>
		
		<input id="butto" type="button" value="Back" onclick="location.href='collected_list.php'">
		
			</form>
		  
		</center>
	</div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>