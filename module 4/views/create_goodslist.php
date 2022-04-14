<!DOCTYPE html>
<html lang="en">
<head>
<title>Create Goods List</title>
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
<script type="text/javascript">
function validateFormInsert()
{
  if(document.form1.goodsListID.value == ""){
    alert("Please insert the goods list id");
    return false;
  }
  if(document.form1.stud_ID.value == ""){
    alert("Please insert the student ID");
    return false;
  }
  if(document.form1.goods_ID.value == ""){
    alert("Please insert the goods id");
    return false;
  }
  if(document.form1.goods_status.value == "choose"){
    alert("Please insert the goods status");
    return false;
  }
  if(document.form1.goods_collectedDate.value == ""){
    alert("Please insert the goods collected date");
    return false;
  }
  return( true );
}
</script>
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
    <div class="container">
      <div class="kotak" align="center">
      <form method="post" action="isi_goodslist.php" onsubmit="return(validateFormInsert());" name="form1">
        <h1>Goods List</h1>
        
        Goods List ID:
        <input type="text" name="goodsListID">

        Student ID:
        <input type="text" name="stud_ID" >   

        Goods ID:
        <input type="text" name="goods_ID" >    
       
        Goods status:
        <select id="goods_status" name="goods_status">
          <option value="choose">Choose</option>
          <option value="Collected">Collected</option>
          <option value="Ready to collect">Ready to collect</option>
        </select>  

        Collected Date:
        <input type="date" name="goods_collectedDate">
        
        <br>  
        <input type="submit" value="Create" name="submit">
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
