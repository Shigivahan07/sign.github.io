<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="box-container">
    </div>
    <div class="sign-in-form" id="signInForm">
        <h1 class="head">SIGN IN</h1>
        <form action="login.php" method="POST" id="loginForm">
                <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
            <input type="text" name="uname" id="username" placeholder="Username*">
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password*">
                <i class="bi bi-eye" id="password-toggle" onclick="togglePasswordVisibility()"></i>
            </div>
            <a href="Forgetpasswordpage.php" onclick="forgotPassword()" class="forgot" id="forgotLink">Forgot Password?</a>
            <span style="margin: 0 10px;">|</span>
            <a href="signuppage.php" class="signup">Sign Up</a>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const boxContainer = document.querySelector(".box-container");

            for (let i = 0; i < 640; i++) {
                const box = document.createElement("div");
                box.className = "box";
                boxContainer.appendChild(box);
            }
        });
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var passwordToggle = document.getElementById("password-toggle");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordToggle.classList.remove("bi-eye");
                passwordToggle.classList.add("bi-eye-slash");
            } else {
                passwordField.type = "password";
                passwordToggle.classList.remove("bi-eye-slash");
                passwordToggle.classList.add("bi-eye");
            }
        }
    </script>
</body>

</html>