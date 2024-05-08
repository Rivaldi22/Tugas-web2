<?php
session_start();
// menghitung total poin
function hitungPoin($menang, $seri) {
    return ($menang * 3) + $seri;
}
// Mengecek jika session 
if (!isset($_SESSION['klasemen'])) {
    $_SESSION['klasemen'] = array();
}
// Proses data input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menambahkan data
    $negara = $_POST["negara"];
    $pertandingan = $_POST["pertandingan"];
    $menang = $_POST["menang"];
    $seri = $_POST["seri"];
    $kalah = $_POST["kalah"];

    $_SESSION['klasemen'][] = array(
        'negara' => $negara,
        'P' => $pertandingan,
        'M' => $menang,
        'S' => $seri,
        'K' => $kalah
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Group B Piala Asia Qatar U-23</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Group B Piala Asia Qatar U-23</h1>
    <p><?php echo date('d M Y H:i:s'); ?></p>

    <h2>Input Data Klasemen</h2>
    <form method="post">
        <label for="negara">Negara:</label>
        <select name="negara" id="negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label for="pertandingan">Jumlah Pertandingan(P):</label>
        <input type="number" name="pertandingan" id="pertandingan" value="3"><br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="number" name="menang" id="menang" value="0"><br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="number" name="seri" id="seri" value="0"><br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="number" name="kalah" id="kalah" value="0"><br><br>
        <input type="submit" value="Tambah Data">
    </form>
    <h2>Data Group B Piala Asia Qatar U-23</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Negara</th>
            <th>P</th>
            <th>M</th>
            <th>S</th>
            <th>K</th>
            <th>Poin</th>
        </tr>
        <?php
        // Menampilkan data dalam tabel
        foreach ($_SESSION['klasemen'] as $nomor => $data) {
            $poin = hitungPoin($data['M'], $data['S']);
            echo "<tr>";
            echo "<td>" . ($nomor+1) . "</td>";
            echo "<td>Negara {$data['negara']}</td>";
            echo "<td>{$data['P']}</td>";
            echo "<td>{$data['M']}</td>";
            echo "<td>{$data['S']}</td>";
            echo "<td>{$data['K']}</td>";
            echo "<td>$poin</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
