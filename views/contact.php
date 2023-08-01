<?php
 
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name field
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = validate_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate Email field
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = validate_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Message field
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = validate_input($_POST["message"]);
    }

    // If there are no validation errors, simulate processing and show the "Thank You" page
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        // Simulate processing (you can perform database operations or send an email here)
        // For this example, we'll simply redirect to the thank you page with the user-submitted data
        header("Location: thank_you.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&message=" . urlencode($message));
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

    <main>
    <?php require "menu.php"; ?>
        <h2>Contact Us</h2>
        <form method="post" action="/thank_you">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
            <br><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message"><?php echo $message; ?></textarea>
            <span class="error"><?php echo $messageErr; ?></span>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </main>

   
</body>
</html>
