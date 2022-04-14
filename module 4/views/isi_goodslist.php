<!-- To insert data of create_goodslist.php into database. -->
<?php

include "database.php";

if (isset($_POST['submit'])){
    $stud_ID = $_POST['stud_ID'];
    $goods_ID = $_POST['goods_ID'];
    $goodsListID = $_POST['goodsListID'];
    $goods_status = $_POST['goods_status'];
    $goods_collectedDate = $_POST['goods_collectedDate'];
}

$sql = "INSERT INTO goodslist (goodsListID,stud_ID,goods_ID,goods_status,goods_collectedDate) 
        VALUES('$goodsListID','$stud_ID','$goods_ID','$goods_status','$goods_collectedDate')";

if (mysqli_query($conn, $sql)) {
      
    echo "<script type='text/javascript'> window.location='read_goodslist.php' </script>";
     
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
?>