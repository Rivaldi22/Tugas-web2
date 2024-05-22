<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
    echo "<html>
    <body>";
    $koneksi = mysqli_connect("localhost", "root", "", "kampus");
    // cek koneksi
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $cari = $_POST['nama'];

    $stmt = $koneksi->prepare("SELECT * FROM tabel_mhs WHERE nama LIKE ? ORDER BY nama ASC");
    $searchTerm = "%" . $cari . "%";
    $stmt->bind_param("s", $searchTerm);

    // Execute the statement
    $stmt->execute();

    $hasil = $stmt->get_result();

    echo "<table>
    <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jurusan</th>
    </tr>";

    while ($data = $hasil->fetch_assoc()) {
        echo "<tr>
        <td>" . htmlspecialchars($data['nim']) . "</td>
        <td>" . htmlspecialchars($data['nama']) . "</td>
        <td>" . htmlspecialchars($data['alamat']) . "</td>
        <td>".$data['jurusan']."</td>
        </tr>";
    }

    echo "</table>
    </body>
    </html>";
    // Close the statement and connection
    $stmt->close();
    $koneksi->close();
}
?>
