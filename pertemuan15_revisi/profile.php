<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
</head>
<body>
    <h2>Profil Pengguna</h2>
    <p>Username: <?php echo htmlspecialchars($username); ?></p>
    <p><a href="welcome.php">Kembali ke Halaman Selamat Datang</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
