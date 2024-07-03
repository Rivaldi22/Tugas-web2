<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Data loading
$header = ['Group', 'Country', 'Wins', 'Draws', 'Losses', 'Points'];
$data = [];

$sql = "SELECT * FROM countries";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $data[] = [$row['group_name'], $row['country_name'], $row['wins'], $row['draws'], $row['losses'], $row['points']];
}

// Output PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="UEFA_2024_Country_Standings.pdf"');

// Create PDF content
$output = '<html><body>';
$output .= '<h1>UEFA 2024 Country Standings</h1>';
$output .= '<table border="1">';
$output .= '<tr><th>' . implode('</th><th>', $header) . '</th></tr>';

foreach ($data as $row) {
    $output .= '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
}

$output .= '</table>';
$output .= '</body></html>';

// Convert HTML to PDF and output
echo $output;
