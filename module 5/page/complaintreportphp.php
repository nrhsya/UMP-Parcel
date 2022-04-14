<!DOCTYPE html>
<html lang="en">
<head>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "ump_parcel");  
 $query = "SELECT complaint_status, count(*) as number FROM complaint GROUP BY complaint_status";  
 $result = mysqli_query($connect, $query);  
 ?>  
<title>Complaint Report</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../css/layoutcss.css" <!-- css -->

<style>
table, tr, th, td
{
	border: 3px solid black;
	border-collapse: collapse;
	padding: 50px;
}

</style>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['complaint_status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["complaint_status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Solved and Pending Report',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
</head>
<body>
<!-- Navigation bar -->
<!-- Search bar -->
<div class="navbar">
  <a href="../../module 2/mailcenter_officer.php" class="center">Home</a>
  <div style="float:right;" class="dropdown">
    <a href="../../Module1/logout.php">Logout</a>
  </div>
</div>

<!-- all buttons section -->
<div class="container" style="background-color:#FFFACD">
  <div class="row">
    <div class="column">
		<center>
		
		<h1 class="xlarge-font" style="color:black"><b>Report</b></h1>
			<table>
				<?php
				
				$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
		           if (mysqli_connect_errno())
               {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } 


	              // to select the targeted database
	            mysqli_select_db($con,"ump_parcel") or die(mysqli_error());
				
                $query1 = mysqli_query($con, "SELECT COUNT(complaint_ID) as total FROM complaint");
			    $resulttot = mysqli_fetch_assoc($query1);
				$query2 = mysqli_query($con, "SELECT COUNT(complaint_ID) as total FROM complaint WHERE complaint_status='Solved'");
			    $resulttots = mysqli_fetch_assoc($query2);
				$query3 = mysqli_query($con, "SELECT COUNT(complaint_ID) as total FROM complaint WHERE complaint_status='Pending'");
			    $resulttotp = mysqli_fetch_assoc($query3);
				
				"<tr>";
					print "<th>Total Report</th>";
					echo "<td>"."<input type=text disabled=disabled id=totrep name=totrep value=".$resulttot['total']." </td>";
				"</tr>";
				
				"<tr>";
					print "<th>Total Report Pending</th>";
					echo "<td>"."<input type=text disabled=disabled id=totrep name=totrep value=".$resulttotp['total']." </td>";
				"</tr>";
				
				"<tr>";
					print "<th>Total Report Solved</th>";
					echo "<td>"."<input type=text disabled=disabled id=totrep name=totrep value=".$resulttots['total']." </td>";
				"</tr>";
			?>
		</table>
		<div style="width:900px;">  
                <h3 align="center">Total Percentage of Pending and Solved Complaints</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
			
			<br>
			<input id="but" type="button" value="Confirm" >
		</center>
	
	</div>
  </div>
</div>

<div class="footer">
	<a class="links" href="complainthomepagephp.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
