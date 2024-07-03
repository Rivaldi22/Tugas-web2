<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Handle form submission to update country data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $group_name = $_POST['group_name'];
    $country_name = $_POST['country_name'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = ($wins * 3) + $draws;

    $sql = "UPDATE countries SET group_name='$group_name', country_name='$country_name', wins='$wins', draws='$draws', losses='$losses', points='$points' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to view_countries.php after update
        header('Location: view_countries.php');
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch existing country data for update form
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM countries WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
} else {
    header('Location: view_countries.php');
    exit();
}
?>

<h2>Update Country</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Group:
    <select name="group_name">
        <option value="A" <?php if ($row['group_name'] == 'A') echo 'selected'; ?>>A</option>
        <option value="B" <?php if ($row['group_name'] == 'B') echo 'selected'; ?>>B</option>
        <option value="C" <?php if ($row['group_name'] == 'C') echo 'selected'; ?>>C</option>
        <option value="D" <?php if ($row['group_name'] == 'D') echo 'selected'; ?>>D</option>
    </select><br>
    Country Name: <input type="text" name="country_name" value="<?php echo $row['country_name']; ?>" required><br>
    Wins: <input type="number" name="wins" value="<?php echo $row['wins']; ?>" required><br>
    Draws: <input type="number" name="draws" value="<?php echo $row['draws']; ?>" required><br>
    Losses: <input type="number" name="losses" value="<?php echo $row['losses']; ?>" required><br>
    <input type="submit" value="Update">
</form>

<!-- Tombol kembali ke halaman view_countries.php -->
<br>
<a href="view_countries.php">Back to View Countries</a>
