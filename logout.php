<?php
session_start();

// Clear the session data to log out the user
session_unset();
session_destroy();

// Redirect to the login page after logout
header("Location: login.php");
exit;
?>
