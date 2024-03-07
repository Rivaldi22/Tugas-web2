<!DOCTYPE html>
<html>

<head>
    <title>Hitung Rata-Rata Nilai</title>
</head>

<body>

    <h2>|| Hitung Rata-Rata Nilai Mahasiswa ||</h2>
    <h3>INPUT DATA :</h3>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan: </td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Nilai Tugas: </td>
                <td><input type="number" name="nilai_tugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS: </td>
                <td><input type="number" name="nilai_uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS: </td>
                <td><input type="number" name="nilai_uas"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Hitung">
        <input type="reset" value="Hapus">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        // Menghitung rata-rata
        $rata_rata = intval(($nilai_tugas + $nilai_uts + $nilai_uas) / 3);

        // Menampilkan hasil
        echo "<h3>OUTPUT :</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
        echo "Nilai Tugas: " . $nilai_tugas . "<br>";
        echo "Nilai UTS: " . $nilai_uts . "<br>";
        echo "Nilai UAS: " . $nilai_uas . "<br>";
        echo "Rata-Rata Nilai: " . $rata_rata . "<br>";
    }
    ?>


</body>

</html>