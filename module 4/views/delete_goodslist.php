<?php

include ("database.php");

$goodsListID = $_GET['goodsListID'];

$sql = "DELETE FROM goodslist WHERE goodsListID = '$goodsListID'";
$result = mysqli_query($conn,$sql) or die ("Could not execute query");

if($result){
echo "<script type= 'text/javascript'> window.location='read_goodslist.php'</script>";
}
?>