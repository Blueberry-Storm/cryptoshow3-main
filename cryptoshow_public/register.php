<?php

$register = <<< REGISTER
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register - CryptoShow</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="register-container">
            <div class="header-animate">Join CryptoShow</div>
            <form id="registerForm">
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email Address" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="confirmPassword" required>
                <button type="submit">Register</button>
                <p class="message">Already registered? <a href="login.html">Log in</a></p>
            </form>
        </div>
    </body>
    </html>
REGISTER;
echo $register;