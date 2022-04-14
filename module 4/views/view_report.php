<?php
  include "database.php";

  $goodsListReportID = $_GET['goodsListReportID'];

  $sql = "SELECT s.stud_name,l.*,g.goods_type
          FROM student s
          JOIN goodlist_report l ON s.stud_ID=l.stud_ID
          JOIN goods g ON g.goods_ID=l.goods_ID";

  $result = mysqli_query($conn,$sql) or die ("Could not execute query");
  $row = mysqli_fetch_assoc($result);

  $stud_ID = $row['stud_ID'];
  $stud_name = $row['stud_name'];
  $goods_ID = $row['goods_ID'];
  $goods_type = $row['goods_type'];
  $goods_status = $row['goods_status'];
  $goods_collectedDate = $row['goods_collectedDate'];
  $total_dur = $row['total_dur'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Report</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../stylesheets/layout_css.css"> <!-- css -->

<style>

  .kotak table{
    justify-content: center;
    width: 800px;
    border-radius: 15px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .kotak input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }

  input[type=number]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }

  input[type=date]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }

  input[type=submit] {
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-color:black;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color:#ddd ;
  }

  input[type=reset] {
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    border-color:black;
    cursor: pointer;
  }

  input[type=reset]:hover {
    background-color: #ddd;
  }

  button{
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    border-color:black;
    cursor: pointer;
  }

  button:hover {
    background-color: #ddd;
  }
  
  table{
    padding: 0px;
  }
  th{
    text-align:left;
  }
  table h1{
    text-align:center; 
  }
</style>
</head>
<body>
   
    <!-- Header -->
    <div class="header">
      <div class="row">
        <div class="column-33">
          <img src="../assets/ump_parcel_logo3.png" width="100" height="100">
        </div>
        <div class="column-33">
          <h1>UMP Parcel</h1>
          <p>Your parcels made easy</p>
        </div>
      </div>
    </div>

    <!-- Navigation bar -->
    <div class="navbar">
    <a href="../receipent_homepage.php">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Menu 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="read_goodslist.php">View Goods List</a>
        <a href="goodsreport_homepage.php">View Goods List Report</a>
      </div>
    </div>
    <div style="float:right;" class="dropdown">
      <button class="dropbtn">Profile 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../../Module1/logout.php">Logout</a>
      </div>
    </div>
  </div>
    
    <!-- section -->
    <div class="container">
      <div class="kotak" align="center">
      
        <table>
          <tr>
            <td colspan="2"><h1>Report</h1></td>
          </tr>
          <tr>
              <td>Student ID</td>
              <td><?php echo $stud_ID; ?></td>
          </tr>
          <tr>
              <td>Student Name</td>
              <td><?php echo $stud_name; ?></td>
          </tr>
          <tr>
              <td>Goods ID</td>
              <td><?php echo $goods_ID; ?></td>
          </tr>
          <tr>
              <td>Goods Type</td>
              <td><?php echo $goods_type; ?></td>
          </tr>
          <tr>
              <td>Goods Status</td>
              <td><?php echo $goods_status; ?></td>
          </tr>
          <tr>
              <td>Collected Date</td>
              <td><?php echo $goods_collectedDate; ?></td>
          </tr>
          <tr>
              <td>Total Duration</td>
              <td><?php echo $total_dur; ?></td>
          </tr>
          <tr>
              <td colspan="2"><input type ="hidden" name="goodsListID" value="<?php echo $goodsListID; ?>"></td>
          </tr>
          <tr>
              <td colspan="2" align="center"><button value="back" name="Back" onclick="location.href='./report.php'">Back</button></td>
          </tr>
        </table>

      </div>
    </div>
    <br><br>

    <div class="footer">
        <a class="links" href="">Home &#9475;</a>
        <a>&copy; Copyright 2021 . All Rights Reserved</a>
    </div>
</footer>
</body>
</html>
