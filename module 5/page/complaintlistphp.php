<!DOCTYPE html>
<html lang="en">
<head>
<title>Collected List</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../css/layoutcss.css"> <!-- css -->

<style>
table, tr, th, td
{
	border: 3px solid black;
	border-collapse: collapse;
	padding: 20px;
	height: 100px;
}

th
{
	background-color: black;
	color: white;
	font-weight: bold;
}

p
{
	font-size: 40px;
	font-weight: bold;
	color: black;
	letter-spacing: 3px;
}
</style>

</head>
<body>
<?php
$error ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
            // to make a connection with database
		$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
		if (mysqli_connect_errno())
               {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } 


	        // to select the targeted database
	        mysqli_select_db($con,"ump_parcel") or die(mysqli_error());
		
	        // to create a query to be executed in sql
	        extract( $_POST );
			
			

  
}
?>

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
	  
	    <!-- html for layout -->
		<center>
		
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>List of Complaints</b></h1>
		
			<table>
				<tr>
					<th>Complaint ID</th>
					<th>Student ID	</th>
					<th>Student Name</th>
                    <th>Complaint Type</th>
					<th>Complaint Description</th>
                    <th>Complaint Status</th>
					<th></th>
					<th></th>
				</tr>
					<?php   // LOOP TILL END OF DATA 
    
            // to make a connection with database
		             $con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
		              if (mysqli_connect_errno())
                          {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                          } 
	                 // to select the targeted database
	                mysqli_select_db($con,"ump_parcel") or die(mysqli_error()); 
					
					if (isset($_POST['update'])){
						
						$updateq = "UPDATE complaint SET complaint_status='Solved' WHERE complaint_ID='$_POST[hidden]'";
						mysqli_query($con, $updateq);
					}
					
					if (isset($_POST['delete'])){
						
						$deleteq = "DELETE FROM complaint WHERE complaint_ID='$_POST[hidden]'";
						mysqli_query($con, $deleteq);
					}
					
                          
				$query = "SELECT * FROM complaint";
			    $result = $con->query($query);
                while($row=$result->fetch_assoc()){
					echo "<form action=complaintlistphp.php method=post>";
					echo "<tr>";
                    echo "<td>" . $row['complaint_ID'] . " </td>";
                    echo "<td>" . $row['stud_ID'] . " </td>";
					echo "<td>" . $row['stud_name'] . " </td>";
					echo "<td>" . $row['complaint_type'] . " </td>";
					echo "<td>" . $row['complaint_desc'] . " </td>";
                    echo "<td>" . $row['complaint_status'] . " </td>";
					echo "<td style=display:none>" . "<input type=hidden name=hidden value=" . $row['complaint_ID'] . " </td>";
					echo "<td>" . "<input id=but2 type=submit name=update value=Solved" . " </tf>";
					echo "<td>" . "<input id=but2 type=submit name=delete value=Delete" . " </tf>";
                    echo "</tr>";
					echo "</form>";
					  }
			     ?>
				 
			</table>
			<br>
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
