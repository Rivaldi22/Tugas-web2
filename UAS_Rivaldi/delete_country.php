<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM countries WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil di hapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<a href="view_countries.php"> Back to View Countries</a>
