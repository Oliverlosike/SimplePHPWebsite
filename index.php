<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $errors = [];

  if (empty($name)) {
    $errors[] = 'Name is required.';
  }

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
  }

  if (empty($message)) {
    $errors[] = 'Message is required.';
  }

  if (!empty($errors)) {
    // Display errors to the user
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
  } else {

  }
}
?>
<?php require "router.php"; ?>
<?php require "validation.php"; ?>