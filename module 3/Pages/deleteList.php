<?php
	include("../connect.php");
	
	if(isset($_GET['DeleteCollectedList']))
	{
		$collectedListID = $_GET['DeleteCollectedList'];
	
		$query = "DELETE FROM collectedlist 
					WHERE collectedListID = '".$collectedListID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:collected_list.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:collected_list.php");
	}
?>