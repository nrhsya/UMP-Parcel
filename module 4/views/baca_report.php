<?php
          include "database.php";

          $sql = "SELECT s.stud_name,l.*,g.goods_type,g.goods_arrive_date
                    FROM student s
                    JOIN goodlist_report l ON s.stud_ID=l.stud_ID
                    JOIN goods g ON g.goods_ID=l.goods_ID
                    GROUP BY l.goodsListReportID";
          
          $result = $conn->query($sql);
?>
