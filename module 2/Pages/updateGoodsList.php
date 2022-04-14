<?php
	include("../connect.php");
	
	if(isset($_POST['Update']))
	{
		$goods_ID = $_GET['PassGoodsList'];
		$goods_type = $_POST['goods_type'];
		$goods_status = $_POST['goods_status'];
		$goods_arrive_date = $_POST['goods_arrive_date'];		
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_sender_info = $_POST['goods_sender_info'];
			
		$query = "UPDATE goods 
					SET goods_ID='".$goods_ID."',
					goods_type='".$goods_type."',
					goods_status='".$goods_status."',
					goods_arrive_date='".$goods_arrive_date."',
					goods_collect_date='".$goods_collect_date."',
					goods_sender_info='".$goods_sender_info."'
					WHERE goods_ID='".$goods_ID."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:goods_list.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:goods_list.php");
	}
?>