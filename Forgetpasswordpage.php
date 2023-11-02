<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap">
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-color: black;
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
            background-color: #56A3A6;
            transform: scale(1.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .sign-in-form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #56A3A6;
            width: 300px;
            height: 300px;
            padding: 20px;
            text-align: center;
            z-index: 1;
            border-radius: 40px;
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

        input[type=email] {
            width: 90%;
            margin-bottom: 10px;
            padding: 10px;
            border-width: 0px;
            border-radius: 15px;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        input[type=submit] {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            background-color: #000;
            color: #56A3A6;
            border-radius: 15px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="box-container">
    </div>
    <div class="sign-in-form">
        <h1 class="head">Reset your password</h1>
        <p>Enter your user account's verified email address and we will send you a password reset link.</p>
        <form action="send.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email address" value="" required>
            <input type="submit" name="send" value="Send" class="buttonsa">
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const boxContainer = document.querySelector(".box-container");

            for (let i = 0; i < 650; i++) {
                const box = document.createElement("div");
                box.className = "box";
                boxContainer.appendChild(box);
            }
        });

        const loginForm = document.querySelector('form');

        loginForm.addEventListener('submit', function (event) {
            if (loginForm.username.value === '') {
                event.preventDefault();
                alert('Please enter your email address.');
            }
        });
    </script>
</body>

</html>
