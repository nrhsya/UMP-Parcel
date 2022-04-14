<!DOCTYPE html>
<html lang="en">
<head>
<title>Total Received Parcel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../stylesheets/layout_css.css"> <!-- css -->

<style>
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

  * {
  box-sizing: border-box;
    }

    .column {
    float: left;
    width: 33.33%;
    padding: 10px;
    
    }

    .row-1:after {
    content: "";
    display: table;
    clear: both;
    }
    
    h3,h5{
        font-size:30px;
    }

    h1{
        font-size:40px;
        color:#F2AA4CFF;
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
      <h2> Percentage Total Received Parcel </h2>
      <hr>
      <div class="row-1">
        <div class="column">
            <h3>Daily</h3>
            <h5>PARCEL</h5>
            <button type="submit" name="View Details" onclick="location.href='daily_report.php'">View Details</button>
        </div>
        <div class="column">
            <h3>Weekly</h3>
            <h5>PARCEL</h5>
            <button type="submit" name="View Details" onclick="location.href='weekly_report.php'">View Details</button>
        </div>
        <div class="column">
            <h3>Monthly</h3>
            <h5>PARCEL</h5>
            <button type="submit" name="View Details" onclick="location.href='monthly_report.php'">View Details</button>
        </div>
      </div>
      <hr>
      <br>
      <button type="submit" name="back" onclick="location.href='goodsreport_homepage.php'">Back</button>
    </div>

    <div class="footer">
        <a class="links" href="">Home &#9475;</a>
        <a>&copy; Copyright 2021 . All Rights Reserved</a>
    </div>
</footer>
</body>
</html>
