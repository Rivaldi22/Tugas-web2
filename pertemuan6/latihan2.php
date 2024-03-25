<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            form {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Segitiga</h2>
        <form method="post" action="">
            <?php
            // Jumlah segitiga yang akan diinput
            $jumlahSegitiga = 5;

            for ($i = 1; $i <= $jumlahSegitiga; $i++) {
                echo "<h3>Segitiga ke-$i</h3>";
                echo "<label for='alas_$i'>Alas:</label>";
                echo "<input type='number' name='alas[]' id='alas_$i' required><br>";
                echo "<label for='tinggi_$i'>Tinggi:</label>";
                echo "<input type='number' name='tinggi[]' id='tinggi_$i' required><br><br>";
            }
            ?>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        // Fungsi untuk menghitung luas segitiga
        function hitungLuasSegitiga($alas, $tinggi) {
            return 0.5 * $alas * $tinggi;
        }

        // Memproses input dan menampilkan hasil
        if (isset($_POST['hitung'])) {
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            // Menampilkan hasil untuk setiap segitiga yang diinput
            echo "<h2>Hasil: </h2>";
            for ($i = 0; $i < count($alas); $i++) {
                $luas = hitungLuasSegitiga($alas[$i], $tinggi[$i]);
                echo "<p>Luas segitiga ke-" . ($i + 1) . ": " . $luas . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
