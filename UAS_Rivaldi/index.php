<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<h1>Welcome to UEFA 2024</h1>
<a href="add_country.php">Add Country</a> | 
<a href="view_countries.php">View Countries</a> | 
<a href="logout.php">Logout</a>
