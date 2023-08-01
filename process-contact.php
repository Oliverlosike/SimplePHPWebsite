<?php
session_start();

// Function to validate login credentials and retrieve the hashed password from the database
function validateLogin($username, $password) {
    // Replace "your_database_host", "your_database_username", "your_database_password", and "your_database_name" with your database credentials
    $conn = mysqli_connect("localhost", "root", "", "process");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($conn, $username);
    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];
        mysqli_close($conn);

        // Verify the password using password_verify function
        if (password_verify($password, $hashedPassword)) {
            return true;
        }
    }

    mysqli_close($conn);
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    if (validateLogin($username, $password)) {
        // If login is successful, set the session variable and redirect to the dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php"); // Change this to the dashboard page URL
        exit();
    } else {
        // If login fails, you can display an error message or redirect to the login page with a message
        header("Location: login.php?error=1"); // Redirect to login page with an error flag
        exit();
    }
} else {
    // Redirect to the login page if accessed directly without form submission
    header("Location: login.php");
    exit();
}
?>
