<?php
session_start();
include "dbconn.php";

if(isset($_POST['full-name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat-password'])) {
	
	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$full_name = validate($_POST['full-name']);
	$email = validate($_POST['email']);
	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$repeat_password = validate($_POST['repeat-password']);

	if(empty($full_name) || empty($email) || empty($username) || empty($password) || empty($repeat_password)) {
		header("Location: signup.php?error=All fields are required");
		exit();
	}

	if ($password !== $repeat_password) {
		header("Location: signup.php?error=Passwords do not match");
		exit();
	}
	$sql = "INSERT INTO users (full_name, email, user_name, password) VALUES ('$full_name', '$email', '$username', '$password')";

	if(mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();	
	} else {
		header("Location: signup.php?error=Registration failed. Please try again.");
		exit();
	}
}
?>