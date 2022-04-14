<?php
	include("../connect.php");
	
	if(isset($_POST['Confirm']))
	{		
		$goods_ID = $_POST['goods_ID'];
		$goods_type = $_POST['goods_type'];
		$goods_status = $_POST['goods_status'];
		$goods_arrive_date = $_POST['goods_arrive_date'];		
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_sender_info = $_POST['goods_sender_info'];
		
		$query = "INSERT INTO goods (goods_ID, goods_type, goods_status, goods_arrive_date, goods_collect_date, goods_sender_info)
					VALUES ('$goods_ID', '$goods_type', '$goods_status', '$goods_arrive_date', '$goods_collect_date', '$goods_sender_info')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:goods_list.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:goods_list.php");
		}
	}
	
	else
	{
		header("location:goods_list.php");
	}
?>