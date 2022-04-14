<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validateForm() {
  var x = document.forms["complaintform"]["stud_name"].value;
  var y = document.forms["complaintform"]["stud_ID"].value;
  var z = document.forms["complaintform"]["complaint_type"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
  if (y == "" || x == null) {
    alert("Student ID must be filled out");
    return false;
  }
  if (z == "" || x == null) {
    alert("Complaint type must be filled out");
    return false;
  }
}

</script>
<title>File a Complaint</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icons -->
<link rel="stylesheet" href="../css/layoutcss.css"> <!-- css -->

<style>
.error {color: #FF0000;}
div .table
{
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.status
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px ;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}
 .statuscom
{
  width: 100%;
  height: 200px;
  padding: 12px 20px;
  margin: 8px ;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}
</style>

</head>
<body>

<?php
$error ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
            // to make a connection with database
		$con = mysqli_connect("localhost", "root") or die(mysqli_connect_error());
		if (mysqli_connect_errno())
               {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                } 


	        // to select the targeted database
	        mysqli_select_db($con,"ump_parcel") or die(mysqli_error());
		
	        // to create a query to be executed in sql
	        extract( $_POST );

            if (empty($_POST["stud_name"])) {
               $nameErr = "Name is required";
          } else {
               $stud_name = test_input($_POST["stud_name"]);
                 }
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
          } else {
               $stud_ID = test_input($_POST["stud_ID"]);
                 }
			if (empty($_POST["email"])) {
               $typeErr = "Complaint type is required";
          } else {
               $complaint_type = test_input($_POST["complaint_type"]);
                 }
		
			
	        $query = "INSERT INTO `complaint` (`complaint_ID`, `stud_ID`, `stud_name`, `complaint_type`, `complaint_desc`, `complaint_status`) VALUES ('','$stud_ID','$stud_name','$complaint_type','$complaint_desc','Pending')";
	        // to run sql query in database
	        $result = mysqli_query($con, $query);
	     
		//Check whether the insert was successful or not
	        if($result) 
	        {
		        
                    echo('Complaint submitted');
					
		}
		else 
	        {
			        
	            die("Insert failed");
	        }
	 
	 
   
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!-- Navigation bar -->
<!-- Search bar -->
<div class="navbar">
  <div class="search-container">
  </div>
  <a href="../../module 4/receipent_homepage.php" class="center">Home</a>
  <div style="float:right;" class="dropdown">
    <a href="../../Module1/logout.php">Logout</a>
  </div>
</div>

<!-- all buttons section -->
<div class="container" style="background-color:#FFFACD">
  <div class="row">
    <div class="column">
	<center>
		<h1 class="xlarge-font" style="color:black"><b>File a Complaint</b></h1>
	</center>
	
		<div class="table">
			<form name="complaintform" action="submitcomplaintphp.php" method="post" onsubmit="return validateForm()">
				<p>				    
					<b>Student name:</b> <input class="status" type="text" name="stud_name"><span class="error">* <?php if(isset($nameErr)) echo $nameErr;?></span><br><br>
					<b>Student ID:</b> <input class="status" type="text" name="stud_ID"><span class="error">* <?php if(isset($emailErr)) echo $emailErr;?></span><br><br>
					<b>Complaint type:</b>
                               <select name="complaint_type">
							   <option value="">Select...</option>
                               <option value="Lost Item">Lost Item</option>
                               <option value="Damaged Item">Damaged Item</option>
                               </select><span class="error">* <?php if(isset($typeErr)) echo $typeErr;?></span><br><br>
					<b>Complaint description:</b> <input class="statuscom" type="text" name="complaint_desc">
				</p><br>
				<center>
			<p><input id="but" type="submit" value="Submit complaint"></p>
			<p><input id="but" type="reset" value="Reset"></p>
		        </center>
			</form>
		</div>
	</div>
  </div>
</div>
<div class="footer">
	<a class="links" href="complainthomepagephp.php">Home</a><br><br>
	<a>&copy; Copyright 2021 . All Rights Reserved</a>
</div>

</body>
</html>
	