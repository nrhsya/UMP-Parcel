<?php
	include("../connect.php");
	
	$query = "SELECT WEEK(goods_collect_date), COUNT(stud_ID)
				FROM collectedlist
				GROUP BY WEEK(goods_collect_date)";
	
	$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>General Report</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../CSS/layout_css.css"> <!-- css -->

<script src="../JavaScript/calc_general_report.js"></script> <!-- javascript -->

<style>
	table, tr, th, td
	{
		border-collapse: collapse;
		padding: 10px;
		text-align: center;
	}
	
	table
	{
		width: 100%;
	}

	th
	{
		background-color: black;
		color: white;
		font-weight: bold;
	}

	tr:nth-child(even)
	{
		background-color: #f6e3bc;
	}
	
	tr:nth-child(odd)
	{
		background-color: #fcf6e9;
	}

	tr:hover 
	{
		background-color: #edc678;
		color: black;
	}

	#greenlinks:link, #greenlinks:visited 
	{
	  background-color: #1cb01c;
	  color: white;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  width: 100px;
	  font-weight: bold;
	}

	#greenlinks:hover, #greenlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}

	#redlinks:link, #redlinks:visited 
	{
	  background-color:#eb2d53;
	  color: white;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  width: 100px;
	  font-weight: bold;
	}

	#redlinks:hover, #redlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}
	
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
      <a href="../../module 1/logout.php">Logout</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="column">
		<center>
		<h1 class="xlarge-font" style="color:black"><b>Weekly Report</b></h1>
		
		<div style="float:right;" class="dropdown">
		  <button style="background-color:#F2AA4CFF;color:black;font-weight:bold;" class="dropbtn">View Report By</button>
		  <div id="myDropdown" class="dropdown-content">
			<a href="daily_report.php">Daily</a>
			<a href="weekly_report.php">Weekly</a>
			<a href="monthly_report.php">Monthly</a>
		  </div>
		</div>
		
			<table>
			  <tr style="background-color:black; color: white" id="list">
				<td><b>Week</b></td>
				<td><b>Number of Students Received Parcel</b></td>
			  </tr>
			  
			  <?php
				$weekly_query = "SELECT WEEK(goods_collect_date) FROM collectedlist";
				$weekly_conn = mysqli_query($conn, $weekly_query);
				$weekly = mysqli_num_rows($weekly_conn);
				
				while($row=mysqli_fetch_assoc($result))
				{
					$goods_collect_date = $row['WEEK(goods_collect_date)'];
					$stud_ID = $row['COUNT(stud_ID)'];

			  ?>
				<tr id="list">
					<td><?php echo $goods_collect_date ?></td>
					<td><?php echo $stud_ID ?></td>
				</tr>
			  <?php
				}
			  ?>	
			  
			    <tr id="list">
					<td style="background-color:black; color: white" ><b>TOTAL</b></td>
					<td style="background-color:#b37700;font-weight:bold;color:white"><?php echo $weekly ?></td>
				</tr>
				
			</table>
			
			<br>
		</center>
			<input id="but" type="button" value="Back" onclick="location.href='report_timely_basis.php'">	
	</div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <script>
  <!-- Dropdown Button -->
    function myFunction() 
	{
	  document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) 
	{
	  if (!event.target.matches('.dropbtn')) 
	  {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		
		for (i = 0; i < dropdowns.length; i++) 
		{
		  var openDropdown = dropdowns[i];
		  
		  if (openDropdown.classList.contains('show')) 
		  {
			openDropdown.classList.remove('show');
		  }
		}
	  }
	}
  </script>

</body>
</html>
