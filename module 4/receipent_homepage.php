<!DOCTYPE html>
<html lang="en">
<head>
<title>Receipent Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="./stylesheets/layout_css.css"> <!-- css -->

<style>

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

</style>
</head>
<body>
   
    <!-- Header -->
    <div class="header">
      <div class="row">
        <div class="column-33">
          <img src="./assets/ump_parcel_logo3.png" width="100" height="100">
        </div>
        <div class="column-33">
          <h1>UMP Parcel</h1>
          <p>Your parcels made easy</p>
        </div>
      </div>
    </div>

    <!-- Navigation bar -->

    <div class="navbar">
  <a href="../module 4/receipent_homepage.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./views/read_goodslist.php">View Goods List</a>
      <a href="./views/goodsreport_homepage.php">View Goods List Report</a>
    </div>
  </div>
  <div style="float:right;" class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../Module1/logout.php">Logout</a>
    </div>
  </div>
</div>
<br>
    
    <!-- all buttons section -->
    <div class="container" align="center">
      <div class="row">

        <div class="column-33">
          <img src="./assets/deliveryicon.png" width="200" height="190">
        </div>

        <div class="column-66">
          <p>Welcome To</p>
        <h1 class="xlarge-font" style="color:#F2AA4CFF"><b>UMP Parcel</b></h1>
        <h1 class="large-font"><b>Keep track of <br> all your parcels <br> in one place</b></h1><br>

        <button class="button" name="goods_list" onclick="location.href='./views/read_goodslist.php'">Goods List</button>
        <button class="button" name="complaint" onclick="location.href='../module 5/page/submitcomplaintphp.php'">complaint</button>
        <button class="button" name="goods_report" onclick="location.href='./views/goodsreport_homepage.php'">Received Goods Report</button>

        </div>
      </div>
    </div>
    <br>

    <div class="container" style="background-color:#F2AA4CFF;" align="center">

        <img src="./assets/phone_icon.png" alt="App" width="20" height="20">
        <h2>Contact Us</h2>
            
        <div class="clearfix">
            <div class="box" style="background-color:#F2AA4CFF">
                <h2>Address</h2>
                <p>Universiti Malaysia Pahang, <br>26600 Pekan Pahang, <br>MALAYSIA</p>
            </div>

            <div class="box" style="background-color:#F2AA4CFF">
                <h2>Phone Number</h2>
                <p><a>09-424 5600 (P)</a></p>
                <p><a>09-549 3131 (G)</a></p>
            </div>

            <div class="box" style="background-color:#F2AA4CFF">
                <h2>Email</h2>
                <p>pro@ump.edu.my</p>
            </div>
          </div> 
    </div>

    <div class="footer">
        <a class="links" href="">Home &#9475;</a>
        <a class="links" href="#news">Privacy &#9475;</a>
        <a class="links" href="#contact">Site Map</a><br>
        <a>&copy; Copyright 2021 . All Rights Reserved</a>
    </div>
</footer>
</body>
</html>
