<?php

include './nav.php';

$profile = <<< PROFILE
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile - CryptoShow</title>
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        $nav

        <div class="content">
            <div class="profile-container">
                <div class="profile-pic-container">
                    <img id="profilePicPreview" src="#" alt="Profile Picture">
                    <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
                </div>
                <form id="profileForm">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" placeholder="Username" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <button type="submit">Update Profile</button>
                </form>
            </div>
        </div>

        <script src="js/profile.js"></script>
    </body>
    </html>
PROFILE;
echo $profile;