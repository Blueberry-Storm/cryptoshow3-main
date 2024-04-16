<?php

include './nav.php';

$devices = <<< DEVICES
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crypto Devices - CryptoShow</title>
        <link rel="stylesheet" href="css/devices.css">
    </head>
    <body>
        $nav

        <div class="content">
            <h1>My Cryptographic Devices</h1>
            <div class="grid">
                <!-- Device cards with cryptographic specifics will be dynamically added here by JavaScript -->
            </div>
        </div>

        <script src="js/devices.js"></script>
    </body>
    </html>
DEVICES;
echo $devices;