<?php
include "database.php";

$goodsListID = $_GET['goodsListID'];

$sql = "SELECT * FROM goodslist 
        WHERE goodsListID = '$goodsListID'";
$result = mysqli_query($conn,$sql) or die ("Could not execute query");
$row = mysqli_fetch_assoc($result);

$goodsListID = $row['goodsListID'];
$stud_ID = $row['stud_ID'];
$goodsID = $row['goods_ID'];
$goods_status = $row['goods_status'];
$goods_collectedDate = $row['goods_collectedDate'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Goods List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../stylesheets/layout_css.css"> <!-- css -->

<style>

  .kotak form{
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

  input[type=date],input[type=number]{
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

  button {
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
      <form method="post" action="ubah_goodslist.php" >
        <h1>Goods List</h1>
        
        Student ID:
        <input type="text" name="stud_ID" value="<?php echo $stud_ID; ?>" >

        Goods ID:
        <input type="text" name="goods_ID" value="<?php echo $goodsID; ?>" >

        Goods status:
        <select id="goods_status" name="goods_status" value="<?php echo $goods_status; ?>" >
          <option value="choose">Choose</option>
          <option value="Collected">Collected</option>
          <option value="Ready For Collection">Ready For Collection</option>
        </select>

        Collected Date:
        <input type="date" name="goods_collectedDate" value="<?php echo $goods_collectedDate; ?>" > 
      
        <input type ="hidden" name="goodsListID" value="<?php echo $goodsListID; ?>">
        <br>  
        <input type="submit" value="submit" name="submit">
        <input type="reset" value="Reset">
        <button value="View" name="view" onclick="location.href='./read_goodslist.php'">View</button>
      </form>
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
