<?php
	include("../connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Report Percentage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../CSS/layout_css.css"> <!-- css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body
{
	background-color: #ffe6b3;
}
table, tr, th, td
{
	border-collapse: collapse;
	padding: 15px;
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
	background-color: #cc3300;
	color: white;
	font-size:20px;
}

tr:nth-child(odd)
{
	background-color: #ff6666;
	color: white;
	font-size:20px;
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

#piechart
{
	border: 2px solid white;
	width: 1100px;
	height: 500px;
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

<center>
		<div class="column">
		
			<h1 class="xlarge-font" style="color:black"><b>Percentage of Goods</b></h1>

			<div class="container">
			  <table>
				  <tr style="font-size:20px;">
					<th>GOODS STATUS</th>
					<th>NUMBER OF GOODS BASED ON GOODS STATUS</th>
				  </tr>
				
				<?php
					$fetchqry = "SELECT goods_status, COUNT(goods_status) FROM `collectedlist`
									GROUP BY goods_status";
					
					$result=mysqli_query($conn,$fetchqry);
					$num=mysqli_num_rows($result);
					
				 while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				 { 
				?>
				  <tr style="color:black;">
					<td  style="font-weight:bold;"><?php echo $row['goods_status'];?></td>
					<td><?php echo $row['COUNT(goods_status)'];?></td>
				  </tr>
				<?php 
				} 
				?>
			  </table>
			</div>
			
			<div id="piechart"></div><br><br>

			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

			<script type="text/javascript">
			// Load google charts
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			// Draw the chart and set the chart values
			function drawChart() 
			{
			  var data = google.visualization.arrayToDataTable([
			  ['Goods Status', 'Percentage of Goods Based on Goods Status'], 
			  <?php
					$result=mysqli_query($conn,$fetchqry);
			  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			  {
			  echo "['".$row['goods_status']."', ".$row['COUNT(goods_status)']."],";
			   } 
			   ?>  ]);
			  // Optional; add a title and set the width and height of the chart
			  var options = {'title':'PERCENTAGE OF GOODS BASED ON GOODS STATUS',
							 'colors':['#cc3300', '#ff6666'],
							 'pieHole': '0.5'
							};

			  // Display the chart inside the <div> element with id="piechart"
			  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
			  chart.draw(data, options);
			}
			</script>
			
			<input id="but" type="button" value="Back" onclick="location.href='collected_list_report.php'">
		</div>
</center>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
