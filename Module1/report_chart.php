<?php include('config.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>UMP Parcel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
	<link rel="stylesheet" href="CSS/admin_css.css">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['User', 'Hours per Day'],
          ['Admin',     <?php echo $conn->query("SELECT * FROM admin")->num_rows;?> ],
          ['Officer',      <?php echo $conn->query("SELECT * FROM officer")->num_rows;?> ],
          ['Warden',  <?php echo $conn->query("SELECT * FROM warden")->num_rows;?> ],
          ['Student', <?php echo $conn->query("SELECT * FROM student")->num_rows;?> ],
        ]);

        var options = {
          title: 'UMP Parcel Total User Percentage'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

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
		<div id="piechart" style="width: 900px; height: 500px;"></div>
</div>
</center>
<center>
<div class="container">
		<div>
			<a href="user_list_report.php" class="view"><b>BACK</b></a>
		</div>
</div>
</center>

<div class="footer">
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
