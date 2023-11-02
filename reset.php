<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["password"]) && isset($_POST["repeat-password"])) {
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeat-password"];
        if ($password === $repeatPassword) {
            header("Location: reset_success.php");
            exit;
        } else {
            header("Location: reset.php?error=Passwords do not match");
            exit;
        }
    } else {
        header("Location: reset.php?error=Password fields are required");
        exit;
    }
}

