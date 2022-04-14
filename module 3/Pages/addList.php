<?php
	include("../connect.php");
	
	if(isset($_POST['Confirm']))
	{		
		$collectedListID = $_POST['collectedListID'];
		$goods_ID = $_POST['goods_ID'];
		$stud_ID = $_POST['stud_ID'];
		$stud_name = $_POST['stud_name'];
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_status = $_POST['goods_status'];
		$goods_status_date = $_POST['goods_status_date'];
		
		if(empty($_POST['goods_ID']))
		{
			header("location:add_list.php?error=!! Goods ID is required !!");
			exit();
		}
		
		elseif(empty($_POST['stud_ID']))
		{
			header("location:add_list.php?error=!! Student ID is required !!");
			exit();
		}
		
		elseif(empty($_POST['collectedListID']))
		{
			header("location:add_list.php?error=!! Collected List ID is required !!");
			exit();
		}
		
		else
		{
			$query = "INSERT INTO collectedlist (collectedListID, goods_ID, stud_ID, stud_name, goods_collect_date, goods_status, goods_status_date)
						VALUES ('$collectedListID', '$goods_ID', '$stud_ID', '$stud_name', '$goods_collect_date', '$goods_status', '$goods_status_date')";

			$result = mysqli_query($conn, $query);
			
			if($result)
			{
				echo "Data successfully added into the system";
				header("location:collected_list.php");
			}
			else
			{
				die("Error inserting data !  ".$conn->error);
				header("location:collected_list.php");
			}
		}
	}
	
	else
	{
		header("location:collected_list.php");
	}
	

?>