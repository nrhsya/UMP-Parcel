<!DOCTYPE html>
<html lang="en">
<head>
<title>Warden Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="./CSS/layout_css.css"> <!-- css -->

<style>
.dropdown 
{
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn 
{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn 
{
  background-color: #F2AA4CFF;
  color: black;
}

.dropdown-content 
{
  display: none;
  position: absolute;
  background-color: #F2AA4CFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a 
{
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover 
{
  background-color: black;
  color: white;
}

.dropdown:hover .dropdown-content 
{
  display: block;
}
</style>

</head>
<body>

<!-- Header -->
<div class="header">
	<div class="row">
		<div class="column-33">
			<img src="./Images/ump_parcel_logo3.png" width="200" height="300">
		</div>
		<div class="column-33">
			<h1>UMP Parcel</h1>
			<h2>WARDEN HOMEPAGE</h2>
		</div>
	</div>
</div>

<!-- Navigation bar -->
<div class="navbar">
  <a href="warden_homepage.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./Pages/collected_list.php">View Collected List</a>
      <a href="./Pages/collected_list_report.php">View Report</a>
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

<div class="container">
  <div class="row">
    <div class="column-66">
      <p>Welcome To</p>
	  <h1 class="xlarge-font" style="color:#F2AA4CFF"><b>UMP Parcel</b></h1>
	  <h1 class="large-font"><b>Keep track of <br> all your parcels <br> in one place</b></h1><br>

	  <input type="button" value="Collected List" onclick="location.href='./Pages/collected_list.php'">	
	  <input type="button" value="Collected List Report" onclick="location.href='./Pages/collected_list_report.php'">
    </div>
	
    <div class="column-33">
        <img src="./Images/deliveryicon.png" width="335" height="471">
    </div>
  </div>
</div>

<!-- all buttons section -->
<div class="container" style="background-color:#F2AA4CFF">
  <div class="row">
    <div class="column-33">
      <img src="./Images/phone_icon.png" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font" style="color:white;"><b>Contact Us</b></h1>
	  
	  <h1 class="large-font" style="color:white;"><b>Address</b></h1>
      <p>Universiti Malaysia Pahang, <br>26600 Pekan Pahang, <br>MALAYSIA</p>
	  
	  <h1 class="large-font" style="color:white;"><b>Phone Number</b></h1>
      <p><a>09-424 5600 (P)</a></p>
	  <p><a>09-549 3131 (G)</a></p>
	  
	  <h1 class="large-font" style="color:white;"><b>Email</b></h1>
      <p>pro@ump.edu.my</p>
    </div>
  </div>
</div>

<div class="footer">
	|<a class="links" href="warden_homepage.php"> Home </a>|<br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>


</body>
</html>
