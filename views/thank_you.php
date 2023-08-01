<?php require "menu.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <p>Thank you for your submission. Here is the information we received:</p>
    <ul>
        <li>Name: <?php echo htmlspecialchars($name); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Message: <?php echo htmlspecialchars($message); ?></li>
    </ul>
</body>
</html>