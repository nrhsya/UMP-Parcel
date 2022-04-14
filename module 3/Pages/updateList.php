<?php
	include("../connect.php");
	
	if(isset($_POST['Update']))
	{
		$collectedListID = $_GET['PassCollectedList'];
		$goods_ID = $_POST['goods_ID'];
		$stud_ID = $_POST['stud_ID'];
		$stud_name = $_POST['stud_name'];
		$goods_collect_date = $_POST['goods_collect_date'];
		$goods_status = $_POST['goods_status'];
		$goods_status_date = $_POST['goods_status_date'];
		
		$query = "UPDATE collectedlist 
					SET collectedListID='".$collectedListID."',
					goods_ID='".$goods_ID."', 
					stud_ID='".$stud_ID."',
					stud_name='".$stud_name."',
					goods_collect_date='".$goods_collect_date."',
					goods_status='".$goods_status."',
					goods_status_date='".$goods_status_date."'
					WHERE collectedListID='".$collectedListID."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:collected_list.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:collected_list.php");
	}
?>