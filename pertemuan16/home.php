<?php
//memulai session
session_start();
//cek session
if(!isset($_SESSION['login']))
{ 
header('location:./login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Remember Me</title>
</head>
<body>
<h5>Selamat datang di halaman utama website @rivaldihdyt22</h5>
<p><a href="./logout.php">Logout</a></p>
</body>
</html>