<?php
include 'config.php';

if(isset($_POST['update']))
{
    $id = $_POST["user_ID"];
	$name = $_POST["user_name"];
	//$type = $_POST["user_type"];
	$password = $_POST["password"];
	
	$query = " UPDATE officer SET officer_name = '".$name."', password = '".$password."' where officer_ID = '".$id."'";
    $result = mysqli_query($conn,$query);

    if($result) {
        header("location: user_list.php");
    }
    else {
        echo ' Please Check Your Query ';
    }
 }
else {
    header("location: user_list.php");
}
?>