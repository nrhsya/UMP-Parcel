<!DOCTYPE html>
<html lang="en">
<head>
<title>Collected List</title>
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
	
	.error 
	{
	   background-color: #fbd0d8;
	   color: #e91640;
	   font-size: 30px;
	   padding: 5px;
	   width: 60%;
	   border-radius: 5px;
	   margin: 20px auto;
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
	  
	    <!-- html for layout -->
		<center>
		
		<h1 class="xlarge-font" style="color:black"><b>Add Record</b></h1>
		
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
				<form name="addlist" action="addList.php" method="POST">
				<input type="hidden" name="action" value="insert">
					<table>				
						<tr>
							<th>COLLECTED LIST ID</th>
							<td><input type="text" id="collectedListID" name="collectedListID" placeholder="Collected List ID"></td>
						</tr>
						
						<tr>
							<th style="width:30%;">GOODS ID</th>
							<td><input type="text" id="goods_ID" name="goods_ID" placeholder="Goods ID"></td>
						</tr>
						
						<tr>
							<th>STUDENT ID</th>
							<td><input type="text" id="stud_ID" name="stud_ID" placeholder="stud_ID"></td>
						</tr>
						
						<tr>
							<th>STUDENT NAME</th>
							<td><input type="text" id="stud_name" name="stud_name" placeholder="Student Name"></td>
						</tr>
						
						<tr>
							<th>COLLECTED DATE</th>
							<td><input type="date" id="goods_collect_date" name="goods_collect_date" placeholder="Collected Date"></td>
						</tr>
						
						<tr>
							<th>GOODS STATUS</th>
							<td><input type="text" id="goods_status" name="goods_status" placeholder="Goods Status"></td>
						</tr>
						
						<tr>
							<th>DATE OF STATUS CHANGE</th>
							<td><input type="date" id="goods_status_date" name="goods_status_date" placeholder="Date of Status Change"></td>
						</tr>
						
					</table><br>
					
					<input id="but" type="button" value="Back" onclick="location.href='collected_list.php'">
					<input id="but" type="submit" value="Submit" name="Confirm" onclick="addList()" onclick="validateField()">
					<input id="but" type="reset" value="Reset">
			</form>
				
		</center>
			
    </div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <script>  
  <!-- Add List Confirmation -->
  function addList()
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
