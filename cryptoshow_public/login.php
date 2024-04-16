<?php

$login = <<< LOGIN
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - CryptoShow</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="login-container">
            <div class="header-animate">Welcome to CryptoShow</div>
            <form id="loginForm">
                <h2>Login</h2>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Login</button>
                <p class="message">Not registered? <a href="register.html">Create an account</a></p>
                <p class="message">Continue as <a href="events.html">Guest</a></p>
            </form>
        </div>
        <script src="js/login.js"></script>
    </body>
    </html>
LOGIN;
echo $login;