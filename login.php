<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Simulate user authentication
  if ($email === "user@example.com" && $password === "password") {
    echo "Logged in successfully!";
  } else {
    echo "Invalid credentials.";
  }
}
?>
