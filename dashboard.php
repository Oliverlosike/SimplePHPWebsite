<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit;
}
?>

<!-- Display the content of the back office accessible to logged-in users -->
<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
<!-- Add more content specific to the back office section -->

<a href="logout.php">Logout</a>
