<?php
session_start();

// Dummy user credentials (you can replace this with database checks)
$valid_username = 'user123';
$valid_password = 'pass123';

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the credentials
if ($username == $valid_username && $password == $valid_password) {
    // Set session variables
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // If login fails, redirect back to login form with an error
    echo "Invalid login credentials. Please try again.";
    echo '<br><a href="login.php">Go back to login</a>';
}
?>
