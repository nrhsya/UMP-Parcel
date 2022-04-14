<?php
//to read goodlist
    include "database.php";

    //$id = $_GET['id'];

          $sql = "SELECT s.stud_name,l.*,g.goods_type,c.goods_status
                    FROM student s
                    JOIN goodslist l ON s.stud_ID=l.stud_ID
                    JOIN collectedlist c ON s.stud_ID=c.stud_ID
                    JOIN goods g ON g.goods_ID=l.goods_ID
                    WHERE c.goods_status='Ready For Collection' OR l.goods_status='Collected'  
                    GROUP BY l.goodsListID ";
                    
                    
            $result = mysqli_query($conn,$sql) or die ("Could not execute query");
            //$row = mysqli_fetch_assoc($result);
      
            //$goodsListID = $row['goodsListID']
            //$stud_ID = $row['stud_ID'];
            //$stud_name = $row['stud_name'];
            //$goods_ID = $row['goods_ID'];
            //$goods_type = $row['goods_type'];
            //$goods_status = $row['goods_status'];
            //$goods_collectedDate = $row['goods_collectedDate'];
?>