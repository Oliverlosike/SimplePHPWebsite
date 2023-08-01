<?php
session_start();
$title = 'My Website';


$registrationMessage = ''; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'process';

    
    $connection = mysqli_connect($host, $username, $password, $database);

    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error() . " (Error number: " . mysqli_connect_errno() . ")");
    }

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if (mysqli_query($connection, $sql)) {
       
        $registrationMessage = "User registered successfully!";
    } else {
        $registrationMessage = "Error: " . mysqli_error($connection);
    }

   
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php require "menu.php"; ?> 
    <h1>Home</h1>
    <p><?php echo $registrationMessage; ?></p> 

    <footer>Welcome to our Home page</footer>
    <p><a href="/">Go back to home page</a></p>

</body>
</html>
