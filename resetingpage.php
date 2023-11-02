<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap">
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

#password-toggle {
    position: absolute;
    right: 20px;
    top: 50%;
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

#loadingSpinner {
    display: none;
    color: white;
    background-color: white;
}

.box:hover {
    background-color: #ADC698;
    transform: scale(1.1);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.forgot {
    font-family: "Playfair Display";
    color: black;
}

.sign-in-form {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ADC698;
    width: 300px;
    height: 300px;
    padding: 20px;
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
    font-family: "Playfair Display";
    font-size: 30px;
    font-weight: 700;
    color: black;
}

form {
    margin-top: 20px;
}

input[type=text],
input[type=password] {
    width: 90%;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 15px;
    border-width: 0px;
}

a {
    color: #000;
    text-decoration: none;
}

input[type=submit] {
    width: 100%;
    margin-top: 30px;
    padding: 10px;
    background-color: #000;
    color: #ADC698;
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
    </div>
    <div class="sign-in-form" id="signInForm">
        <h1 class="head">RESET YOUR PASSWORD</h1>
        <form action="reset.php" method="POST" id="loginForm">
                <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
            <div class="password-container">
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="bi bi-eye" id="password-toggle" onclick="togglePasswordVisibility()"></i>
            </div>
            <div class="password-container">
                <input type="password" name="repeat-password" id="password" placeholder="Type Password Again">
                <i class="bi bi-eye" id="password-toggle" onclick="togglePasswordVisibility()"></i>
            </div>
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