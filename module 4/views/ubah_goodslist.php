<?php
    include ("database.php");
    extract ($_POST);
    
        $sql = "UPDATE goodslist SET stud_ID='$stud_ID',goods_ID='$goods_ID',goods_status='$goods_status',goods_collectedDate='$goods_collectedDate'
                WHERE goodsListID='$goodsListID'";

        $result = mysqli_query($conn,$sql) or die ("Could not execute query");
        
        if($result){
        echo "<script type = 'text/javascript'> window.location='read_goodslist.php' </script>";
        }
?>