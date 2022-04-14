<?php
	include("../connect.php");
	
	$query = "SELECT * FROM activelist";
	
	$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Active List</title>
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
	
	table, tr, th, td
	{
		border-collapse: collapse;
		padding: 10px;
		text-align: center;
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

	p
	{
		font-size: 40px;
		font-weight: bold;
		color: black;
		letter-spacing: 3px;
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
	  font-weight: bold;
	  width: 100px;
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
	  font-weight: bold;
	  width: 100px;
	}

	#redlinks:hover, #redlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
	}
	
	#yellowlinks:link, #yellowlinks:visited 
	{
	  background-color:#F2AA4CFF;
	  color: black;
	  padding: 6px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  border-radius: 4px;
	  font-weight: bold;
	  width: 180px;
	}

	#yellowlinks:hover, #yellowlinks:active 
	{
	  background-color: black;
	  color: #F2AA4CFF;
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
			<p>A website created by me.</p>
		</div>
	</div>
</div>

<!-- Navigation bar -->
<!-- Search bar -->
<div class="navbar">
  <a href="../mailcenter_officer.php" class="center">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="goods_list.php">View Goods List</a>
      <a href="active_list.php">View Active List</a>
	  <a href="complaint_list.php">View Complaint List</a>
	  <a href="active_list_report.php">View Active List Report</a>
    </div>
  </div> 
  <div style="float:right;" class="dropdown">
    <a href="../../Module1/logout.php">Logout</a>
  </div>
</div>

<!-- all buttons section -->
<div class="container">
  <div class="row">
    <div class="column">
	  
	    <!-- html for layout -->
		<center>
		
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>List of Active Goods</b></h1>
		
		
		</div><br><br><br>
		
			<table>
				  <tr style="background-color:black; color: white" id="list">
					<td><b>STUDENT ID</b></td>
					<td><b>STUDENT NAME</b></td>
					<td><b>STUDENT PHONE NUMBER</b></td>
					<td><b>STUDENT ADDRESS</b></td>
					<td><b>ARRIVED DATE</b></td>
					<td><b>GOODS TYPE</b></td>
					<td><b>COLLECTED DATE</b></td>
					<td><b>GOODS STATUS</b></td>
					<td colspan="4" style="background-color:black; color: white"><b>ACTIONS</b></td>
				  </tr>
				  
				  <?php
					while($row=mysqli_fetch_assoc($result))
					{
						$activeListID = $row['activeListID'];
						$stud_ID = $row['stud_ID'];
						$stud_name = $row['stud_name'];
						$stud_phonenum = $row['stud_phonenum'];
						$stud_address = $row['stud_address'];
						$goods_arrive_date = $row['goods_arrive_date'];
						$goods_type = $row['goods_type'];
						$goods_collect_date = $row['goods_collect_date'];
						$goods_status = $row['goods_status'];
						
				  ?>
					<tr id="list">
						<td><?php echo $stud_ID ?></td>
						<td><?php echo $stud_name ?></td>
						<td><?php echo $stud_phonenum ?></td>
						<td><?php echo $stud_address ?></td>
						<td><?php echo $goods_arrive_date ?></td>
						<td><?php echo $goods_type ?></td>
						<td><?php echo $goods_collect_date ?></td>
						<td><?php echo $goods_status ?></td>
						<td><a id="yellowlinks" href="generate_QR_active.php?getQR=<?php echo $activeListID ?>">Generate QR Code</a></td>
						<td><a id="greenlinks" id="links" href="update_Active_status.php?GetList=<?php echo $activeListID ?>">Edit</a></td>
						<td><a id="redlinks" onclick="deleteList()" href="deleteActiveList.php?DeleteActiveList=<?php echo $activeListID ?>">Delete</a></td>
						<td><input type="checkbox" id="DeleteActiveList" name="DeleteActiveList" value='<?= $activeListID ?>'></td><!-- checkbox to delete banyak2 -->
					</tr>
				  <?php
					}
				  ?>	
			</table>
			<br>
		</center>
			<input id="but" type="button" value="Back" onclick="location.href='../mailcenter_officer.php'">
			<input id="but" type="button" value="Add Record" onclick="location.href='add_Active_list.php'">
			<a style="float:right;" id="redlinks" onclick="deleteActiveList()" href="deleteActiveList.php?DeleteActiveList=<?php echo $activeListID ?>">Delete Selection</a><!-- to delete banyak2 -->
    </div>
  </div>
</div>

<div class="footer">
	<a class="links" href="../mailcenter_officer.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <!-- Delete List Confirmation -->
  <script>
  function deleteActiveList()
  {
	if (confirm("All details of the list will be deleted & cannot be restored\nAre you sure you want to delete this list?"))
	{
		alert("The list has been deleted");
	}
	else
	{
		alert("Cancelled");
	}
  }
  
  </script>

</body>
</html>
