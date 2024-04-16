<?php
include './nav.php';
include 'config.php';  // Make sure this file contains your PDO database connection setup

// Function to fetch all devices
function fetchDevices($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM crypto_device WHERE fk_user_id = :userId");  // Assume a session or some method to get the user ID
    $stmt->execute(['userId' => $_SESSION['user_id']]);
    return $stmt->fetchAll();
}

// Handle adding a new device
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addDevice'])) {
    $deviceName = $_POST['deviceName'];
    $userId = $_SESSION['user_id'];  // This should be set after user logs in

    $stmt = $pdo->prepare("INSERT INTO crypto_device (crypto_device_name, fk_user_id) VALUES (?, ?)");
    $stmt->execute([$deviceName, $userId]);
    header("Location: devices.php");  // Refresh the page to see new device
}

// Handle deleting a device
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteDevice'])) {
    $deviceId = $_POST['deviceId'];

    $stmt = $pdo->prepare("DELETE FROM crypto_device WHERE crypto_device_id = ?");
    $stmt->execute([$deviceId]);
    header("Location: devices.php");  // Refresh the page to reflect deletion
}

$devices = fetchDevices($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Devices - CryptoShow</title>
    <link rel="stylesheet" href="css/devices.css">
</head>
<body>
    <?php echo $nav; ?>

    <div class="content">
        <h1>My Cryptographic Devices</h1>
        <form action="devices.php" method="post">
            <input type="text" name="deviceName" placeholder="Enter device name" required>
            <button type="submit" name="addDevice">Add Device</button>
        </form>

        <div class="grid">
            <?php foreach ($devices as $device) : ?>
                <div class="card">
                    <h3><?= htmlspecialchars($device['crypto_device_name']) ?></h3>
                    <form action="devices.php" method="post">
                        <input type="hidden" name="deviceId" value="<?= $device['crypto_device_id'] ?>">
                        <button type="submit" name="deleteDevice">Delete</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
