<?php 
  include "baca_goodslist.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Goods List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../stylesheets/layout_css.css"> <!-- css -->

<style>
  table, tr, th, td{
    border: 3px solid black;
    border-collapse: collapse;
    padding: 5px;

  }
  th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:#ddd;
    color: black;
  }
  .container
  {
    background-color:white;
  }
  [type=submit] {
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-color:black;
    border-radius: 4px;
    cursor: pointer;
  }

  [type=submit]:hover {
    background-color:#ddd ;
  }

  button {
    background-color: #F2AA4CFF;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-color:black;
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
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
<br>
    
    <!-- section -->
    <div class="container" align="center">
      <h2> Goods List </h2>

      <table>
        <tr>
          <th> Goods List ID</th>
          <th> Student ID </th>
          <th> Student Name </th>
          <th> Goods ID </th>
          <th> Goods Type </th>
          <th> Goods Status </th>
          <th> Collected date </th>
          <th> Action </th>
        </tr>
        
        <?php
              if($result->num_rows>0){
                while($row = $result->fetch_assoc()) {
          
          ?>
                <tr>
                  <td><?php echo $row['goodsListID']; ?> </td>
                  <td><?php echo $row['stud_ID']; ?> </td>
                  <td><?php echo $row['stud_name']; ?> </td>
                  <td><?php echo $row['goods_ID']; ?> </td>
                  <td><?php echo $row['goods_type']; ?> </td>
                  <td><?php echo $row['goods_status']; ?> </td>
                  <td><?php echo $row['goods_collectedDate']; ?> </td>
                  <td><button type="submit" name="update" onclick="location.href='./update_goodslist.php?goodsListID=<?php echo $row['goodsListID']; ?>'"> Update </button>
                      <button type="submit" name="delete" onclick="location.href='./delete_goodslist.php?goodsListID=<?php echo $row['goodsListID']; ?>'"> Delete </button>
                  </td>
                </tr>
                <?php }
              }
              ?>
      </table>
      <br>
      <button type="submit" name="create" onclick="location.href='create_goodslist.php'">Create</button>
    </div>
    <br>

    <div class="footer">
        <a class="links" href="">Home &#9475;</a>
        <a class="links" href="#news">Privacy &#9475;</a>
        <a class="links" href="#contact">Site Map</a><br>
        <a>&copy; Copyright 2021 . All Rights Reserved</a>
    </div>
</footer>
</body>
</html>
