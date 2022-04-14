<?php
	include("../connect.php");
	
	if(isset($_POST['Confirm']))
	{		
		$activeListID = $_POST['activeListID'];
		$stud_ID = $_POST['stud_ID'];
		$stud_name = $_POST['stud_name'];
		$stud_phonenum = $_POST['stud_phonenum'];
		$stud_address = $_POST['stud_address'];
		$goods_arrive_date = $_POST['goods_arrive_date'];
		$goods_type = $_POST['goods_type'];
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_status = $_POST['goods_status'];
		
		$query = "INSERT INTO activelist (activeListID, stud_ID, stud_name, stud_phonenum, stud_address, goods_arrive_date, goods_type, goods_collect_date, goods_status)
					VALUES ('$activeListID', '$stud_ID', '$stud_name', '$stud_phonenum', '$stud_address', '$goods_arrive_date', '$goods_type', '$goods_collect_date', '$goods_status')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:active_list.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:active_list.php");
		}
	}
	
	else
	{
		header("location:active_list.php");
	}
?>