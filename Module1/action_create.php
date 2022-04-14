<?php

if (isset($_POST["create"])) {
	
	require 'config.php';
	require 'function.php';

	$id = $_POST["user_ID"];
	$name = $_POST["user_name"];
	$type = $_POST["user_type"];
	$password = $_POST["password"];
	
	if ($type == "admin") {
		createAdmin($conn, $id, $name, $type, $password);
	}
	else if ($type == "officer") {
		createOfficer($conn, $id, $name, $type, $password);
	}
	else if ($type == "warden") {
		createWarden($conn, $id, $name, $type, $password);
	}
	else {
		createStudent($conn, $id, $name, $type, $password);
	}
}
else {
	header("location: user_create.php");
	exit();
}