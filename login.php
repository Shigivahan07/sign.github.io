<?php
session_start();
include "dbconn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if(empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        
		if($row['user_name'] === $uname && $row['password'] === $pass) {
			echo "Logged In!";
			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			echo "Before redirection to home.php"; 
			header("Location: home.php");
			exit();
		} else {
			header("Location: index.php?error=Incorrect User Name or Password");
			exit();
		}
    } else {
		header("Location: index.php?error=Incorrect User Name or Password");        
		exit();
    }
}
?>
