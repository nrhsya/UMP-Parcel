<?php include "baca_report.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Report</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../stylesheets/layout_css.css"> <!-- css -->

<style>
  table, tr, th, td{
    border: 3px solid black;
	  border-collapse: collapse;
	  padding: 5px;
    width: 900px;

  }
  th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:#ddd;
    color: black;
  }
  .container
  {
    background-color:white;
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

  table button{
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-color:black;
    border-radius: 4px;
    cursor: pointer;
  }
  table button:hover {
    background-color:#ddd ;
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
    <div class="container" align="center">
      <h2> Received Goods Report </h2>

      <table>
        <tr>
          <th> Goods ID </th>
          <th> Goods Status </th>
          <th> Collected Date </th>
          <th> Action </th>
        </tr>
        
        <?php
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
          
          ?>
                <tr>
                  <td><?php echo $row['goods_ID']; ?> </td>
                  <td><?php echo $row['goods_status']; ?> </td>
                  <td><?php echo $row['goods_collectedDate']; ?> </td>
                  <td><button type="submit" name="view" onclick="location.href='./view_report.php?goodsListReportID=<?php echo $row['goodsListReportID']; ?>'"> View </button>
                  </td>
                </tr>
                <?php }
              }
              ?>
      </table>
      <br>
      <input type="submit" value="Back" name="back" onclick="location.href='../views/goodsreport_homepage.php'">
      <br>
    </div>
    <br>

    <div class="footer">
        <a class="links" href="">Home &#9475;</a>
        <a>&copy; Copyright 2021 . All Rights Reserved</a>
    </div>
</footer>
</body>
</html>
