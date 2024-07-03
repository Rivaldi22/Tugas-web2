<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Mendapatkan tanggal dan waktu saat ini
$current_date = date('d F Y');
$current_time = date('H:i:s');
?>

<h1>Klasemen UEFA 2024</h1>
<p>Date: <?php echo $current_date; ?></p>
<p>Time: <?php echo $current_time; ?></p>

<!-- Tombol Add Country sebagai button -->
<form action="add_country.php" method="get">
    <button type="submit">Add Country</button>
</form>

<!-- Tombol Logout -->
<form action="logout.php" method="post">
    <input type="submit" value="Logout">
</form>

<table border="1">
    <tr>
        <th>Group</th>
        <th>Country</th>
        <th>Wins</th>
        <th>Draws</th>
        <th>Losses</th>
        <th>Points</th>
        <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM countries";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['group_name']; ?></td>
            <td><?php echo $row['country_name']; ?></td>
            <td><?php echo $row['wins']; ?></td>
            <td><?php echo $row['draws']; ?></td>
            <td><?php echo $row['losses']; ?></td>
            <td><?php echo $row['points']; ?></td>
            <td>
                <a href="update_country.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_country.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<br>
<a href="report.php" target="_blank">Download PDF Report</a>
