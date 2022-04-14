<!DOCTYPE html>
<html lang="en">
<head>
<title>Complaint Homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="./css/layoutcss.css"> <!-- css -->

</head>
<body>
<div class="header">
	<div class="row">
		<div class="column-33">
			<img src="./Images/ump_parcel_logo3.png" width="200" height="300">
		</div>
		<div class="column-33">
			<h1>UMP Parcel</h1>
			<p>Your parcels made easy</p>
		</div>
	</div>
</div>
<!-- Navigation bar -->
<!-- Search bar -->
<div class="navbar">
  <a href="../module 2/mailcenter_officer.php" class="center">Home</a>
  <div style="float:right;" class="dropdown">
    <a href="../Module1/logout.php">Logout</a>
  </div>
</div>

<!-- all buttons section -->
<div class="container" style="background-color:#FFFACD">
  <div class="row">
    <div class="column-66">
	  <h1 class="xlarge-font" style="color:#F2AA4CFF"><b>Complaint <br> System<br><br></b></h1>
	
	  <input type="button" value="Complaint List" onclick="location.href='./page/complaintlistphp.php'">
	  <input type="button" value="Complaint Report" onclick="location.href='./page/complaintreportphp.php'">
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
<!-- all buttons section -->

<div class="footer">
	<a class="links" href="complainthomepagephp.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
