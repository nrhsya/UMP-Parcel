<?php
	include("../connect.php");

	//delete one by one
	if(isset($_GET['DeleteGeneralReport']))
	{
		$collectedListReportID = $_GET['DeleteGeneralReport'];
		
		$query = "DELETE FROM collectedlistreport
					WHERE collectedListReportID = '".$collectedListReportID."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:general_report.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:general_report.php");
	}
?>