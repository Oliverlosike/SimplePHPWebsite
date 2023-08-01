<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<?php require "menu.php"; ?> <!-- Include the header menu -->
<body>
    <h1>Login</h1>
    <?php
    // Display error message if it exists
    if (isset($_GET['error']) && $_GET['error'] === '1' && isset($_GET['message'])) {
        echo "<p style='color: red;'>{$_GET['message']}</p>";
    }
    ?>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
