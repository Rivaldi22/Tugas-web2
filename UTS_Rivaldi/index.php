<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Klasemen Piala Asia U-23 Group B</title>
</head>
<body>
    <h2>Input Data Klasemen Piala Asia U-23 Group B</h2>
    <?php
    // Proses form jika data telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama_negara = $_POST['nama_negara'];
        $jumlah_pertandingan = $_POST['jumlah_pertandingan'];
        $jumlah_menang = $_POST['jumlah_menang'];
        $jumlah_seri = $_POST['jumlah_seri'];
        $jumlah_kalah = $_POST['jumlah_kalah'];
        $jumlah_poin = $_POST['jumlah_poin'];
        $nama_operator = $_POST['nama_operator'];
        $nim_mahasiswa = $_POST['nim_mahasiswa'];

        // Format data sesuai dengan yang diminta
        $data = "
        <table border='1'>
            <tr>
                <th colspan='2'>Data Group B Piala Asia Qatar U-23</th>
            </tr>
            <tr>
                <td>Nama Operator/NIM</td>
                <td>$nama_operator / $nim_mahasiswa</td>
            </tr>
            <tr>
                <td>Negara $nama_negara</td>
                <td></td>
            </tr>
            <tr>
                <td>P</td>
                <td>$jumlah_pertandingan</td>
            </tr>
            <tr>
                <td>M</td>
                <td>$jumlah_menang</td>
            </tr>
            <tr>
                <td>S</td>
                <td>$jumlah_seri</td>
            </tr>
            <tr>
                <td>K</td>
                <td>$jumlah_kalah</td>
            </tr>
            <tr>
                <td>Poin</td>
                <td>$jumlah_poin</td>
            </tr>
        </table><br>
        ";

        // Tulis data ke dalam file db.html
        $file = fopen("db.html", "a");
        fwrite($file, $data);
        fclose($file);

        echo "<p>Data berhasil disimpan.</p>";
    }
    ?>
   <style>
    .form-group label.left-align {
        display: inline-block;
        width: 200px;
        text-align: left;
        margin-right: 10px;
    }
    .form-group label {
        display: inline-block;
        width: 200px;
        text-align: left;
        margin-right: 10px;
    }
</style>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label for="nama_negara">Nama Negara:</label>
        <select name="nama_negara" id="nama_negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah_pertandingan">Jumlah Pertandingan (P):</label>
        <input type="number" name="jumlah_pertandingan" id="jumlah_pertandingan" required>
    </div>
    <div class="form-group">
        <label for="jumlah_menang">Jumlah Menang (M):</label>
        <input type="number" name="jumlah_menang" id="jumlah_menang" required>
    </div>
    <div class="form-group">
        <label for="jumlah_seri">Jumlah Seri (S):</label>
        <input type="number" name="jumlah_seri" id="jumlah_seri" required>
    </div>
    <div class="form-group">
        <label for="jumlah_kalah">Jumlah Kalah (K):</label>
        <input type="number" name="jumlah_kalah" id="jumlah_kalah" required>
    </div>
    <div class="form-group">
        <label for="jumlah_poin">Jumlah Poin:</label>
        <input type="number" name="jumlah_poin" id="jumlah_poin" required>
    </div>
    <div class="form-group">
        <label for="nama_operator">Nama Operator:</label>
        <input type="text" name="nama_operator" id="nama_operator" required>
    </div>
    <div class="form-group">
        <label for="nim_mahasiswa">NIM Mahasiswa:</label>
        <input type="text" name="nim_mahasiswa" id="nim_mahasiswa" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Submit">
    </div>
</form>


</body>
</html>
