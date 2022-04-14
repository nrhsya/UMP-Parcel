<?php
include 'config.php';

/* CREATE */ /* CREATE */ /* CREATE */ /* CREATE */ /* CREATE */ /* CREATE */ /* CREATE */
function createAdmin($conn, $id, $name, $type, $password) {
	$sql = "INSERT INTO admin (admin_ID, admin_name, user_type, password) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: user_create.php?error=stmtfailed");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "ssss", $id, $name, $type, $password);
		mysqli_stmt_execute($stmt);
		header("location: user_create.php?error=none");
		exit();	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

function createOfficer($conn, $id, $name, $type, $password) {
	$sql = "INSERT INTO officer (officer_ID, officer_name, user_type, password) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: user_create.php?error=stmtfailed");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "ssss", $id, $name, $type, $password);
		mysqli_stmt_execute($stmt);
		header("location: user_create.php?error=none");
		exit();	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

function createWarden($conn, $id, $name, $type, $password) {
	$sql = "INSERT INTO warden (warden_ID, warden_name, user_type, password) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: user_create.php?error=stmtfailed");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "ssss", $id, $name, $type, $password);
		mysqli_stmt_execute($stmt);
		header("location: user_create.php?error=none");
		exit();	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

function createStudent($conn, $id, $name, $type, $password) {
	$sql = "INSERT INTO student (stud_ID, stud_name, user_type, password) VALUES (?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: user_create.php?error=stmtfailed");
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "ssss", $id, $name, $type, $password);
		mysqli_stmt_execute($stmt);
		header("location: user_create.php?error=none");
		exit();	
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}

