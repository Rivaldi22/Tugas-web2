<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .btn-blue {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-blue:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Program Deret Bilangan Ganjil yang Habis Dibagi 3</h2>
        <form method="post">
            <label for="nilai_awal">Masukkan nilai awal:</label>
            <input type="number" id="nilai_awal" name="nilai_awal" required><br>
            <label for="nilai_akhir">Masukkan nilai akhir:</label>
            <input type="number" id="nilai_akhir" name="nilai_akhir" required><br>
            <hr>
            <button type="submit" class="btn-blue" name="hitung">Hitung</button>
        </form>

        <?php
        if(isset($_POST['hitung'])) {
            $nilai_awal = $_POST['nilai_awal'];
            $nilai_akhir = $_POST['nilai_akhir'];

            function deretGanjilYangDibagiTiga($nilai_awal, $nilai_akhir) {
                $jumlah_bilangan = 0;
                $jumlah_nilai_bilangan = 0;
                echo "<p>Deret bilangan ganjil yang habis dibagi 3 dari $nilai_awal sampai $nilai_akhir adalah:</p>";
                
                for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
                    if ($i % 2 != 0 && $i % 3 == 0) {
                        echo "$i ";
                        $jumlah_bilangan++;
                        $jumlah_nilai_bilangan += $i;
                    }
                }
                
                echo "<p>Banyaknya deret bilangan yang tampil: $jumlah_bilangan</p>";
                echo "<p>Jumlah nilai bilangan: $jumlah_nilai_bilangan</p>";
            }

            deretGanjilYangDibagiTiga($nilai_awal, $nilai_akhir);
        }
        ?>
    </div>
</body>
</html>
