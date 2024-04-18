<?php
require("../config/config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get email and password from the form
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Ensure both email and password are provided
	if (!empty($email) && !empty($password)) {
		// Fetch user data from the database
		$query = "SELECT * FROM users WHERE email='$email' OR password='$password'";
		$result = mysqli_query($conn, $query);

		// If user found, verify password
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row['password'])) {
				// Start session and set session variables
				session_start();
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				// Redirect to dashboard
				header("Location: ../dashboard.php");
				exit();
			} else {
				echo "<div class='alert alert-danger' role='alert'>Incorrect password</div>";
				header("Refresh:2; url=index.php");
				exit();
			}
		} else {
			echo "<div class='alert alert-danger' role='alert'>User not found</div>";
			header("Refresh:2; url=index.php");
			exit();
		}
	} else {
		echo "<div class='alert alert-danger' role='alert'>All fields are required</div>";
		header("Refresh:2;");
		exit();
	}
}