<?php
	include("../connect.php");
	
	$goods_ID = $_GET['GetList'];
	$query = "SELECT * FROM goods
				WHERE goods_ID='".$goods_ID."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$goods_ID = $row['goods_ID'];
		$goods_type = $row['goods_type'];
		$goods_status = $row['goods_status'];
		$goods_arrive_date = $row['goods_arrive_date'];
		$goods_collect_date = $row['goods_collect_date'];
		$goods_sender_info = $row['goods_sender_info'];
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
	border: 3px solid black;
	border-collapse: collapse;
	padding: 5px;
	text-align: left;
	background: white;
}

th
{
	background: #F2AA4CFF;
	color: black;
	width: 20%;
}

td
{
	width: 80%;
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
	<center>
		<h1 class="xlarge-font" style="color:black"><b>Update Status Of Goods</b></h1>
	</center>
	
		<center>
		<div class="table">
			<form name="UpdateStatus" action="updateGoodsList.php?PassGoodsList=<?php echo $goods_ID ?>" method="POST">
				<p>					
					<table>
				
						<tr>
							<th>Goods ID</th>
							<td><input type="text" id="goods_ID" name="goods_ID" value="<?php echo $goods_ID ?>" disabled></td>
						</tr>
									
						<tr>
							<th>Goods Type</th>
							<td><input type="text" id="goods_type" name="goods_type" value="<?php echo $goods_type ?>"></td>
						</tr>

						<tr>
							<th>Goods Status</th>
							<td><input type="text" id="goods_status" name="goods_status" value="<?php echo $goods_status ?>"></td>
						</tr>

						<tr>
							<th>Arrived Date</th>
							<td><input type="date" id="goods_arrive_date" name="goods_arrive_date" value="<?php echo $goods_arrive_date ?>"></td>
						</tr>						
				
						<tr>
							<th>Collected Date</th>
							<td><input type="date" id="goods_collect_date" name="goods_collect_date" value="<?php echo $goods_collect_date ?>"></td>
						</tr>

						<tr>
							<th>Sender Info</th>
							<td><input type="text" id="goods_sender_info" name="goods_sender_info" value="<?php echo $goods_sender_info ?>"></td>
						</tr>
				
						
					</table><br>
				
						<input id="but" type="button" value="Back" onclick="location.href='goods_list.php'">
						<input id="but" type="submit" name="Update" value="Update" onclick="updateGoodsList()">
				</p><br>
			</form>
		</div>
		</center>
	</div>
  </div>
</div>

<div class="footer">
	<a class="links" href="../mailcenter_officer.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <!-- Update List Confirmation -->
  <script>
  function updateGoodsList()
  {
	if (confirm("Please confirm all the details of the list is correct"))
	{
		alert("The list was successfully updated");
	}
	else
	{
		alert("Cancelled");
	}
  }
  </script>

</body>
</html>
