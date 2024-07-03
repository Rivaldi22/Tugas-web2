<?php
session_start();
include 'config.php';

// Check if user is already logged in, redirect to view_countries.php if true
if (isset($_SESSION['user_id'])) {
    header('Location: view_countries.php');
    exit();
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Hardcoded credentials
    $expected_nim = "211011401095";
    $expected_password = "admin123";

    // Validate credentials
    if ($nim == $expected_nim && $password == $expected_password) {
        $_SESSION['user_id'] = $nim; // Save user ID (nim) in session
        header('Location: view_countries.php');
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    NIM: <input type="text" name="nim" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Login">
</form>
