<!-- To insert data of create_goodslist.php into database. -->
<?php

include "database.php";

if (isset($_POST['submit'])){
    $report_date = $_POST['report_date'];
    $total_goods_rec = $_POST['total_goods_rec'];
    $total_goods_pan = $_POST['total_goods_pan'];
}

$sql = "INSERT INTO goodlist_report (report_date,total_goods_rec,total_goods_pan) VALUES('$report_date','$total_goods_rec','$total_goods_pan')";

if (mysqli_query($conn, $sql)) {
      
    echo "<script type='text/javascript'> window.location='read_report.php' </script>";
     
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
?>