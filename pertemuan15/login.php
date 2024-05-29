<?php
// Memulai sesi
session_start();

// Periksa apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Data pengguna yang valid untuk contoh ini
    $valid_username = 'Rivaldi';
    $valid_password = '12345678';

    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password valid
    if ($username == $valid_username && $password == $valid_password) {
        // Set session
        $_SESSION['username'] = $username;
        // Redirect ke halaman selamat datang
        header('Location: welcome.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
