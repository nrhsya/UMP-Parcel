<?php
include 'config.php';

if ( !isset($_POST['user_ID'], $_POST['user_type'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

if ($_POST['user_type'] == "admin") {
	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $conn->prepare('SELECT admin_ID, user_type, password FROM admin WHERE admin_ID = ?')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $_POST['user_ID']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $user_type, $password);
			$stmt->fetch();
			// Account exists, now we verify the password.
			if ($_POST['password'] === $password) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['admin_name'] = $_POST['user_name'];
				$_SESSION['admin_ID'] = $id;
				header('Location: admin_homepage.php');
			} else {
				// Incorrect password
				header('Location: ../index.php?error=incorrectpassword');
			}	
		} else {
			// Incorrect username
			header('Location: ../index.php?error=incorrectusername');
		}
		$stmt->close();
	}
}

else if ($_POST['user_type'] == "officer") {
	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $conn->prepare('SELECT officer_ID, user_type, password FROM officer WHERE officer_ID = ?')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $_POST['user_ID']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $user_type, $password);
			$stmt->fetch();
			// Account exists, now we verify the password.
			if ($_POST['password'] === $password) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['officer_name'] = $_POST['user_name'];
				$_SESSION['officer_ID'] = $id;
				header('Location: ../module 2/mailcenter_officer.php');
			} else {
				// Incorrect password
				header('Location: ../index.php?error=incorrectpassword');
			}	
		} else {
			// Incorrect username
			header('Location: ../index.php?error=incorrectusername');
		}
		$stmt->close();
	}
}

else if ($_POST['user_type'] == "warden") {
	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $conn->prepare('SELECT warden_ID, user_type, password FROM warden WHERE warden_ID = ?')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $_POST['user_ID']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $user_type, $password);
			$stmt->fetch();
			// Account exists, now we verify the password.
			if ($_POST['password'] === $password) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['warden_name'] = $_POST['user_name'];
				$_SESSION['warden_ID'] = $id;
				header('Location: ../module 3/warden_homepage.php');
			} else {
				// Incorrect password
				header('Location: ../index.php?error=incorrectpassword');
			}	
		} else {
			// Incorrect username
			header('Location: ../index.php?error=incorrectusername');
		}
		$stmt->close();
	}
}

else if ($_POST['user_type'] == "student") {
	// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
	if ($stmt = $conn->prepare('SELECT stud_ID, user_type, password FROM student WHERE stud_ID = ?')) {
		// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
		$stmt->bind_param('s', $_POST['user_ID']);
		$stmt->execute();
		// Store the result so we can check if the account exists in the database.
		$stmt->store_result();
	
		if ($stmt->num_rows > 0) {
			$stmt->bind_result($id, $user_type, $password);
			$stmt->fetch();
			// Account exists, now we verify the password.
			if ($_POST['password'] === $password) {
			// Verification success! User has logged-in!
			// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['stud_name'] = $_POST['user_name'];
				$_SESSION['stud_ID'] = $id;
				header('Location: ../module 4/receipent_homepage.php');
			} else {
				// Incorrect password
				header('Location: ../index.php?error=incorrectpassword');
			}	
		} else {
			// Incorrect username
			header('Location: ../index.php?error=incorrectusername');
		}
		$stmt->close();
	}
}

?>



