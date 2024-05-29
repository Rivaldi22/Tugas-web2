<?php
// Memulai sesi
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
