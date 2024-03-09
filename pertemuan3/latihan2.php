<!DOCTYPE html>
<html>

<head>
    <title>Nilai Akademik</title>
</head>

<body>
    <h2>Input Nilai Akademik</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table>
        <tr>
        <td>Nama:</td>
        <td><input type="text" id="nama" name="nama" required></td>
        </tr>
        <tr>
        <td>NIM:</td>
        <td><input type="text" id="nim" name="nim" required></td>
        </tr>
        <tr>
        <td>Mata Kuliah:</td>
        <td><input type="text" id="matakuliah" name="matakuliah" required></td>
        </tr>
        <tr>
        <td>Jumlah Kehadiran:</td>
        <td><input type="number" id="kehadiran" name="kehadiran" min="0" max="18" required></td>
        </tr>
        <tr>
        <td>Nilai Tugas:</td>
        <td><input type="number" id="tugas" name="tugas" min="0" max="100" required></td>
        </tr>
        <tr>
        <td>Nilai UTS:</td>
        <td><input type="number" id="uts" name="uts" min="0" max="100" required></td>
        </tr>
        <tr>
        <td>Nilai UAS:</td>
        <td><input type="number" id="uas" name="uas" min="0" max="100" required></td>
        </tr>
        <tr>
        <td><input type="submit" name="submit" value="Hitung"></td>
        </tr>
    </table>
    </form>
    <script>
        function clearInputs() {
            document.getElementById("nama").value = "";
            document.getElementById("nim").value = "";
            document.getElementById("matakuliah").value = "";
            document.getElementById("kehadiran").value = "";
            document.getElementById("tugas").value = "";
            document.getElementById("uts").value = "";
            document.getElementById("uas").value = "";
        }
    </script>
    <button onclick="clearInputs()">Hapus</button>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Bobot masing-masing komponen
        $bobot_kehadiran = 0.1;
        $bobot_tugas = 0.2;
        $bobot_uts = 0.3;
        $bobot_uas = 0.4;

        // Fungsi untuk menghitung nilai akhir
        function hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas) {
            global $bobot_kehadiran, $bobot_tugas, $bobot_uts, $bobot_uas;

            // Maksimal kehadiran
            $max_kehadiran = 18;

            // Batasi kehadiran maksimal
            $kehadiran = min($kehadiran, $max_kehadiran);

            // Hitung nilai akhir dengan memperhitungkan bobot kehadiran
            $nilai_akhir = intval((($kehadiran / $max_kehadiran) * $bobot_kehadiran * 100) +
                           ($tugas * $bobot_tugas) +
                           ($uts * $bobot_uts) +
                           ($uas * $bobot_uas));

            return $nilai_akhir;
        }

        // Fungsi menentukan grade
        function tentukanGrade($nilai_akhir) {
            if ($nilai_akhir >= 80) {
                return 'A';
            } elseif ($nilai_akhir >= 70) {
                return 'B';
            } elseif ($nilai_akhir >= 60) {
                return 'C';
            } elseif ($nilai_akhir >= 50) {
                return 'D';
            } else {
                return 'E';
            }
        }

        // Fungsi menentukan keterangan
        function tentukanKeterangan($nilai_akhir) {
            if ($nilai_akhir > 65) {
                return 'Lulus';
            } else {
                return 'Tidak Lulus';
            }
        }

        // Input dari form
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $jumlah_kehadiran = $_POST['kehadiran'];
        $nilai_tugas = $_POST['tugas'];
        $nilai_uts = $_POST['uts'];
        $nilai_uas = $_POST['uas'];

        // Hitung nilai akhir
        $nilai_akhir = hitungNilaiAkhir($jumlah_kehadiran, $nilai_tugas, $nilai_uts, $nilai_uas);

        // Tentukan grade
        $grade = tentukanGrade($nilai_akhir);

        // Tentukan keterangan
        $keterangan = tentukanKeterangan($nilai_akhir);

        // Output
        echo "<h2>Hasil Perhitungan Nilai Akademik</h2>";
        echo "<p>Mata Kuliah:  $matakuliah</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<br>";
        echo "<p>Jumlah Kehadiran: $jumlah_kehadiran (".($bobot_kehadiran * 100)."% dari nilai akhir)</p>";
        echo "<p>Nilai Tugas: $nilai_tugas (".($bobot_tugas * 100)."% dari nilai akhir)</p>";
        echo "<p>Nilai UTS: $nilai_uts (".($bobot_uts * 100)."% dari nilai akhir)</p>";
        echo "<p>Nilai UAS: $nilai_uas (".($bobot_uas * 100)."% dari nilai akhir)</p>";
        echo "<p>Nilai Akhir: $nilai_akhir</p>";
        echo "<p>Grade: $grade</p>";
        echo "<p>Keterangan: $keterangan</p>";
    }
    ?>
</body>

</html>
