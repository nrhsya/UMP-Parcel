<?php
	include("../connect.php");
	
	if(isset($_GET['DeleteGoodsList']))
	{
		$goods_ID = $_GET['DeleteGoodsList'];
	
		$query = "DELETE FROM goods 
					WHERE goods_ID = '".$goods_ID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:goods_list.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
		
		//for delete banyak2 with checkbox
		/*foreach($_GET['DeleteGoodsList'] as $goods_ID))
		{
			//$goodsID = $_GET['DeleteGoodsList'];
		
			$query = "DELETE FROM goodslist 
						WHERE goods_ID = '".$goods_ID."'";
				
			$result = mysqli_query($conn, $query);
			
			if($result)
			{
				echo "Data successfully deleted from system";
				header("location:goods_list.php");
			}
			
			else
			{
				die("Error deleting data !  ".$conn->error);
			}
		}*/
	}
	else
	{
		header("location:goods_list.php");
	}
?>