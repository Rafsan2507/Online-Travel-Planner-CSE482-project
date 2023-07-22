<?php
include('../session.php');
include('../dbconnect.php');
?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="stylesheet" href="./src/main.css">
</head>

<body>
    <div class="container">
        <div id="frm">
            <h1>Login</h1>
            <form name="f1" action="auth.php" onsubmit="return validation()" method="POST">
                <p>
                    <label> UserName: </label>
                    <input type="text" id="user" name="user" />
                </p>
                <p>
                    <label> Password: </label>
                    <input type="password" id="pass" name="pass" />
                </p>
                <p>
                    <input type="submit" id="btn" value="Login" />
                </p>
            </form>
        </div>
        <script>
            function validation() {
                var id = document.f1.user.value;
                var ps = document.f1.pass.value;
                if (id.length == "" && ps.length == "") {
                    alert("User Name and Password fields are empty");
                    return false;
                } else {
                    if (id.length == "") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length == "") {
                        alert("Password field is empty");
                        return false;
                    }
                }
            }
        </script>
        <!-- <form class="form" id="createAccount" method="POST" action="savereg.php">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="name" name="name" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="email" name="email" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="phone" name="phone" class="form__input" autofocus placeholder="Phone Number">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="password" name="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form> -->
    </div>
    <script src="./src/main.js"></script>
</body>