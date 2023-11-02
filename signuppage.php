<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        
body {
    margin: 0;
    overflow: hidden;
    background-color: black;
}

.password-container {
    position: relative;
}


.input-group {
    display: flex;
    align-items: center;
}

password-toggle {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.butt {
    width: 100%;
    margin-top: 10px;
}

.input-group {
    position: relative;
}

.input-group .bi-eye,
.input-group .bi-eye-slash {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    cursor: pointer;
}

.login-button {
    background-color: #000;
    color: #FFD700;
    padding: 10px;
    border-width: 0px;
    border-radius: 15px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 25px;
    width: 90%;
    font-family: sans-serif;
}

.box-container {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 100vh;
    box-sizing: border-box;
    position: relative;
}

.box {
    width: 50px;
    height: 50px;
    background-color: black;
    transition: background-color 0.1s;
    border-width: 1px;
}


.box:hover {
    background-color: #CF8BA3;
    transform: scale(1.1);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.forgot {
    font-family: "Playfair Display";
    color: black;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 9px;
}

.form-group label {
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.sign-in-form {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #CF8BA3;
    width: 320px;
    height: 500px;
    padding: 20px;
    padding-top: 5px;
    text-align: center;
    z-index: 1;
    border-radius: 40px;
}

.User_name {
    text-align: center;
    font-family: "Playfair Display";
    font-size: 20px;
    font-weight: 300;
    margin-top: 10px;
    margin-bottom: 10px;
    color: #000;
}

.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
}

h1 {
    text-align: center;
    text-align: center;
    font-family: "Playfair Display";
    font-size: 30px;
    font-weight: 700;
    color: black;
    margin-top: 5px;
}

.las {
    text-align: left;
    padding-left: 10px;
}

form {
    margin-top: 20px;
}

input[type=text],
input[type=password],
input[type=email] {
    width: 90%;
    margin-bottom: 5px;
    padding: 10px;
    border-radius: 15px;
    font-family: "Playfair Display";
    border-width: 0px;
    font-size: 13px;
}

a {
    color: #000;
    text-decoration: none;
}

input[type=submit] {
    width: 100%;
    padding: 10px;
    background-color: #000;
    color: #CF8BA3;
    border-radius: 15px;
    border: none;
}

.signup {
    font-family: "Playfair Display";
    color: black;
}
    </style>
</head>

<body>
    <div class="box-container">
        <!-- JavaScript -->
    </div>
    <div class="sign-in-form">
        <h1 class="head">SIGN UP</h1>
        <form id="loginForm" action="signup.php" method="POST">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php } ?>
            <div class="form-group">
                <label for="full-name" class="las">Full Name</label>
                <input type="text" name="full-name" id="full-name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for "email" class="las">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="username" class="las">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="password" class="las">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <i class="bi bi-eye" id="password-toggle" onclick="togglePasswordVisibility('password')"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="repeat-password" class="las">Repeat Password</label>
                <div class="input-group">
                    <input type="password" name="repeat-password" id="repeat-password" placeholder="Repeat your password" required>
                    <i class="bi bi-eye" id="repeat-password-toggle" onclick="togglePasswordVisibility('repeat-password')"></i>
                </div>
            </div>
            <input href="login.php" type="submit" value="Sign Up" class="butt">
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

        const loginForm = document.querySelector('form');

        function togglePasswordVisibility(fieldId) {
            var passwordField = document.getElementById(fieldId);
            var passwordToggle = document.getElementById(fieldId + "-toggle");

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
