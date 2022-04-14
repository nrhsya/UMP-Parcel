<?php
	include("../connect.php");
	
	if(isset($_GET['DeleteActiveList']))
	{
		$activeListID = $_GET['DeleteActiveList'];
	
		$query = "DELETE FROM activelist 
					WHERE activeListID = '".$activeListID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:active_list.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
		
		//for delete banyak2 with checkbox
		/*foreach($_GET['DeleteActiveList'] as $activeListID))
		{
			//$activeListID = $_GET['DeleteActiveList'];
		
			$query = "DELETE FROM activelist 
						WHERE activeListID = '".$activeListID."'";
				
			$result = mysqli_query($conn, $query);
			
			if($result)
			{
				echo "Data successfully deleted from system";
				header("location:active_list.php");
			}
			
			else
			{
				die("Error deleting data !  ".$conn->error);
			}
		}*/
	}
	else
	{
		header("location:active_list.php");
	}
?>