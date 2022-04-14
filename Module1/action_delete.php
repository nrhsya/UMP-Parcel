<?php
include 'config.php';

/* DELETE ADMIN */

if(isset($_GET['deleteA'])) {
    $id = $_GET["deleteA"];
    $query = " DELETE FROM admin WHERE admin_ID = '".$id."'";
    $result = mysqli_query($conn,$query);
    if($result) {
        header("location: user_list.php");
    }
    else {
        echo ' Please Check Your Query ';
    }
} else

/* DELETE OFFICER */
if(isset($_GET['deleteO'])) {
    $id = $_GET["deleteO"];
    $query = " DELETE FROM officer WHERE officer_ID = '".$id."'";
    $result = mysqli_query($conn,$query);
    if($result) {
        header("location: user_list.php");
    }
    else {
        echo ' Please Check Your Query ';
    }
} else 
   
/* DELETE WARDEN */
if(isset($_GET['deleteW'])) {
    $id = $_GET["deleteW"];
    $query = " DELETE FROM warden WHERE warden_ID = '".$id."'";
    $result = mysqli_query($conn,$query);
    if($result) {
        header("location: user_list.php");
    }
    else {
        echo ' Please Check Your Query ';
    }
} else

/* DELETE STUDENT */
if(isset($_GET['deleteS'])) {
    $id = $_GET["deleteS"];
    $query = " DELETE FROM student WHERE stud_ID = '".$id."'";
    $result = mysqli_query($conn,$query);
    if($result) {
        header("location: user_list.php");
    }
    else {
        echo ' Please Check Your Query ';
    }
} else {
    header("location: user_list.php");
}
	 





	
	