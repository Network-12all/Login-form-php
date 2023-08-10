<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm_password"];

  // Simulate user registration
  if ($password === $confirmPassword) {
    echo "User registered successfully!";
  } else {
    echo "Passwords do not match.";
  }
}
?>
