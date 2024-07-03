<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_name = $_POST['group_name'];
    $country_name = $_POST['country_name'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = ($wins * 3) + $draws;

    $sql = "INSERT INTO countries (group_name, country_name, wins, draws, losses, points)
            VALUES ('$group_name', '$country_name', '$wins', '$draws', '$losses', '$points')";

    if ($conn->query($sql) === TRUE) {
        header('Location: view_countries.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST">
    Group:
    <select name="group_name">
        <option value="A">A</option>
    
    </select><br>
    Country Name: <input type="text" name="country_name" required><br>
    Wins: <input type="number" name="wins" required><br>
    Draws: <input type="number" name="draws" required><br>
    Losses: <input type="number" name="losses" required><br>
    <input type="submit" value="Add Country">
</form>
