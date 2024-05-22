<?php 
echo "<html>
<body>";

$koneksi = mysqli_connect("localhost", "root", "", "kampus");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nama']) && isset($_POST['jurusan'])) {
    
    $cari = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $cari2 = mysqli_real_escape_string($koneksi, $_POST['jurusan']);

    $hasil = mysqli_query($koneksi, "SELECT * FROM tabel_mhs WHERE nama LIKE '%$cari%' OR alamat LIKE '%$cari2%' ORDER BY nama ASC");

    // Cek query
    if (!$hasil) {
        echo "Error: " . mysqli_error($koneksi);
        exit;
    }
    echo "<table border='1'>
    <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jurusan</th>
    </tr>";

    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>
        <td>" . $data['nim'] . "</td>
        <td>" . $data['nama'] . "</td>
        <td>" . $data['alamat'] . "</td>
        <td>" . $data['jurusan'] . "</td>
        </tr>";
    }

    echo "</table>";
}
echo "</body>
</html>";
mysqli_close($koneksi);
?>
