<?php
	include("../connect.php");
	
	if(isset($_POST['Update']))
	{
		$activeListID = $row['activeListID'];
		//$qr_code = $row['qr_code'];
		$stud_ID = $row['stud_ID'];
		$stud_name = $row['stud_name'];
		$stud_phonenum = $row['stud_phonenum'];
		$stud_address = $row['stud_address'];
		$goods_type = $row['goods_type'];
		$goods_collect_date = $row['goods_collect_date'];
		$goods_status = $row['goods_status'];
		
		$query = "UPDATE activelist 
					SET activeListID='".$activeListID."',
					qr_code='".$qr_code."',
					stud_ID='".$stud_ID."',
					stud_name='".$stud_name."',
					stud_phonenum='".$stud_phonenum."',
					stud_address='".$stud_address."',
					goods_type='".$goods_type."',
					goods_collect_date='".$goods_collect_date."',
					goods_status='".$goods_status."',
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