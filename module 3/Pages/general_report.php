<?php
	include("../connect.php");
	
	$query = "SELECT clr.collectedListReportID, cl.collectedListID, cl.goods_status, stud.stud_ID, stud.stud_name, clr.total_goods
					FROM student stud, collectedlist cl, collectedlistreport clr
					WHERE stud.stud_ID = clr.stud_ID
					AND cl.collectedListID = clr.collectedListID";
	
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
	
	input[type=text]
	{
	  width: 88%;
	  padding: 10px;
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
		<h1 class="xlarge-font" style="color:black"><b>Report</b></h1>
		
			<table>
			  <tr style="background-color:black; color: white" id="list">
				<td><b>Student ID</b></td>
				<td><b>Student Name</b></td>
				<td><b>Total Number of Goods</b></td>
				<td colspan="3" style="background-color:black; color: white"><b>ACTIONS</b></td>
			  </tr>
			  
			  <?php
				while($row=mysqli_fetch_assoc($result))
				{
					$collectedListReportID = $row['collectedListReportID'];
					$collectedListID = $row['collectedListID'];
					$goods_status = $row['goods_status'];	
					$stud_ID = $row['stud_ID'];
					$stud_name = $row['stud_name'];
					$total_goods = $row['total_goods'];

			  ?>
				<tr id="list">
					<td><?php echo $stud_ID ?></td>
					<td><?php echo $stud_name ?></td>
					<td><?php echo $total_goods ?></td>
					<td><a id="greenlinks" id="links" href="general_report_view.php?GetGeneralReport=<?php echo $collectedListReportID ?>">View</a></td>
					<td><a id="redlinks" onclick="deleteReport()" href="general_report_delete.php?DeleteGeneralReport=<?php echo $collectedListReportID ?>">Delete</a></td>
				</tr>
			  <?php
				}
			  ?>	
			</table>
			
			<br>
		</center>
			<input id="but" type="button" value="Back" onclick="location.href='collected_list_report.php'">
		</form>
		
	</div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <script>
  <!-- Delete Report Confirmation -->
  function deleteReport()
  {
	if (confirm("All details of the report will be deleted\nAre you sure you want to delete this report?"))
	{
		alert("The report has been deleted");
	}
	else
	{
		alert("Cancelled");
	}
  }
  
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
