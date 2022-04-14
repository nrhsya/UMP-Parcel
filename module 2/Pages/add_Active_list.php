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
		text-align: left;
	}

	tr:nth-child(even)
	{
		background-color: #f6e3bc;
	}
	
	tr:nth-child(odd)
	{
		background-color: #fcf6e9;
	}

	p
	{
		font-size: 40px;
		font-weight: bold;
		color: black;
		letter-spacing: 3px;
	}
	
	input[type=text], input[type=number], input[type=date]
	{
	  width: 100%;
	  padding: 10px;
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
		
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>Add Record</b></h1>
		
		<!-- insert books -->
				<form action="addActiveList.php" method="POST">
				<input type="hidden" name="action" value="insert">
					<table>						
						<tr>
							<th style="width:30%;">ACTIVE ID</th>
							<td><input type="text" id="activeListID" name="activeListID" placeholder="activeListID"></td>
						</tr>
						
						<tr>
							<th style="width:30%;">STUDENT ID</th>
							<td><input type="text" id="stud_ID" name="stud_ID" placeholder="stud_ID"></td>
						</tr>
															
						<tr>
							<th>STUDENT NAME</th>
							<td><input type="text" id="stud_name" name="stud_name" placeholder="Student Name"></td>
						</tr>

						<tr>
							<th>STUDENT PHONE NUMBER</th>
							<td><input type="text" id="stud_phonenum" name="stud_phonenum" placeholder="Student Phone Number"></td>
						</tr>
						
						<tr>
							<th>STUDENT ADDRESS</th>
							<td><input type="text" id="stud_address" name="stud_address" placeholder="Student Address"></td>
						</tr>

						<tr>
							<th>GOODS ARRIVE DATE</th>
							<td><input type="date" id="goods_arrive_date" name="goods_arrive_date" placeholder="Goods Arrive Date"></td>
						</tr>
												
						<tr>
							<th>GOODS TYPE</th>
							<td><input type="text" id="goods_type" name="goods_type" placeholder="Goods Type"></td>
						</tr>
						
						<tr>
							<th>GOODS COLLECT DATE</th>
							<td><input type="date" id="goods_collect_date" name="goods_collect_date" placeholder="Goods Collect Date"></td>
						</tr>
						
						<tr>
							<th>GOODS STATUS</th>
							<td><input type="text" id="goods_status" name="goods_status" placeholder="Goods Status"></td>
						</tr>
						
												
					</table><br>
					
					<input id="but" type="button" value="Back" onclick="location.href='active_list.php'">
					<input id="but" type="submit" value="Submit" name="Confirm" onclick="addActiveList()">
					<input id="but" type="reset" value="Reset">
			</form>
				
		</center>
			
    </div>
  </div>
</div>

<div class="footer">
	<a class="links" href="../mailcenter_officer.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <!-- Add List Confirmation -->
  <script>
  function addActiveList()
  {
	if (confirm("Please make sure the details are correct"))
	{
		alert("The list has successfully been added into the system");
	}
	else
	{
		alert("Cancelled");
	}
  }
  
  </script>

</body>
</html>
