<?php
	include("../connect.php");
	
	if(isset($_POST['Update']))
	{
		$activeListID = $_GET['PassActiveList'];
		$stud_ID = $_POST['stud_ID'];
		$stud_name = $_POST['stud_name'];
		$stud_phonenum = $_POST['stud_phonenum'];
		$stud_address = $_POST['stud_address'];
		$goods_arrive_date = $_POST['goods_arrive_date'];
		$goods_type = $_POST['goods_type'];
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_status = $_POST['goods_status'];

			
		$query = "UPDATE activelist 
					SET activeListID='".$activeListID."',
					stud_ID='".$stud_ID."',
					stud_name='".$stud_name."',
					stud_phonenum='".$stud_phonenum."',
					stud_address='".$stud_address."',
					goods_arrive_date='".$goods_arrive_date."',
					goods_type='".$goods_type."',
					goods_collect_date='".$goods_collect_date."',
					goods_status='".$goods_status."'
					WHERE activeListID='".$activeListID."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:active_list.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:active_list.php");
	}
?>