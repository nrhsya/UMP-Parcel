<?php
	include("../connect.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		// search in all table columns
		// using concat mysql function
		
		$query = "SELECT * FROM `collectedlist` 
					WHERE CONCAT(`collectedListID`, `goods_collect_date`, `goods_ID`, `goods_status`, `goods_status_date`, `stud_id`, `stud_name`) LIKE '%".$valueToSearch."%'";
		
		$search_result = filterTable($query);
		
	}
	else 
	{
		$query = "SELECT * FROM `collectedlist`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "ump_parcel");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Collected List</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../CSS/layout_css.css"> <!-- css -->

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
		<form action="collected_list.php" method="POST">
		<h1 class="xlarge-font" style="color:#F2AA4CFF"><b>List of Collected Goods</b></h1>
		
		<input class="search" type="text" name="valueToSearch" placeholder="Search List">
		<input id="but" class="gap" type="submit" name="search" value="Search"><br><br>

			<table>
				  <tr style="background-color:black; color: white" id="list">
					<td><b>STUDENT ID</b></td>
					<td><b>STUDENT NAME</b></td>
					<td><b>COLLECTED DATE</b></td>
					<td><b>GOODS STATUS</b></td>
					<td><b>GOODS STATUS CHANGE DATE</b></td>
					<td colspan="4" style="background-color:black; color: white"><b>ACTIONS</b></td>
				  </tr>
				  
				  <?php
					while($row=mysqli_fetch_assoc($search_result))
					{
						$collectedListID = $row['collectedListID'];
						$stud_ID = $row['stud_ID'];
						$stud_name = $row['stud_name'];
						$goods_collect_date = $row['goods_collect_date'];
						$goods_status = $row['goods_status'];
						$goods_status_date = $row['goods_status_date'];
				  ?>
					<tr id="list">
						<td><?php echo $stud_ID ?></td>
						<td><?php echo $stud_name ?></td>
						<td><?php echo $goods_collect_date ?></td>
						<td><?php echo $goods_status ?></td>
						<td><?php echo $goods_status_date ?></td>
						<td><a id="yellowlinks" href="generate_QR.php?getQR=<?php echo $collectedListID ?>">Generate QR Code</a></td>
						<td><a id="greenlinks" id="links" href="update_status.php?GetList=<?php echo $collectedListID ?>">Edit</a></td>
						<td><a id="redlinks" onclick="deleteList()" href="deleteList.php?DeleteCollectedList=<?php echo $collectedListID ?>">Delete</a></td>
					</tr>
				  <?php
					}
				  ?>	
			</table>
			<br>
		</center>
			<input id="but" type="button" value="Back" onclick="location.href='../warden_homepage.php'">
			<input id="but" type="button" value="Add Record" onclick="location.href='add_list.php'">
		</form>
    </div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="../warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

  <!-- Delete List Confirmation -->
  <script>
  function deleteList()
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
