<?php
	include("../connect.php");
	
	$collectedListReportID = $_GET['GetGeneralReport'];
	$query = "SELECT stud.stud_ID, stud.stud_name, stud.stud_address, stud.stud_phonenum, clr.total_goods 
				FROM student stud, collectedlistreport clr
				WHERE collectedListReportID='".$collectedListReportID."'
				AND stud.stud_ID = clr.stud_ID";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{		
		$stud_ID = $row['stud_ID'];
		$stud_name = $row['stud_name'];
		$stud_address = $row['stud_address'];
		$stud_phonenum = $row['stud_phonenum'];
		$total_goods = $row['total_goods'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Status</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../CSS/layout_css.css"> <!-- css -->

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

div .table
{
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.status
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
</style>

</head>
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
		<h1 class="xlarge-font" style="color:black"><b>Report Details</b></h1>
	</center>
	
	<center>
		<div class="table">
			<form name="GeneralReport" action="<?php echo $collectedListReportID ?>" method="POST">
				<p>					
					<table>
						<tr>
							<th>Student ID</th>
							<td><input type="text" id="stud_ID" name="stud_ID" value="<?php echo $stud_ID ?>" readonly></td>
						</tr>
						
						<tr>
							<th>Student Name</th>
							<td><input type="text" id="stud_name" name="stud_name" value="<?php echo $stud_name ?>" readonly></td>
						</tr>
						
						<tr>
							<th>Student Address</th>
							<td><input type="text" id="stud_address" name="stud_address" value="<?php echo $stud_address ?>" readonly></td>
						</tr>
						
						<tr>
							<th>Student Phone Number</th>
							<td><input type="text" id="stud_phonenum" name="stud_phonenum" value="<?php echo $stud_phonenum ?>" readonly></td>
						</tr>
						
						<tr>
							<th>Total Number of Goods</th>
							<td><input type=number id="total_goods" name="total_goods" value="<?php echo $total_goods ?>" readonly></td>
						</tr>
						
					</table><br>
					
						<input id="but" type="button" value="Back" onclick="location.href='general_report.php'">
				</p><br>
			</form>
		</div>
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
