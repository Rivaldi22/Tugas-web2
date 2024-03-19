<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            max-width: 400px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        input[type="text"], textarea, button {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }
        .btn-blue {
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .btn-blue:hover {
            background-color: darkblue;
        }

        @media only screen and (min-width: 600px) {
            .container {
                width: 60%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Buku Tamu</h2>
        <form method="post">
            <input type="text" name="nama" placeholder="Nama" required><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <textarea name="komentar" placeholder="Komentar" rows="4" required></textarea><br>
            <button type="submit" class="btn-blue" name="simpan">Simpan</button>
        </form>

        <?php
        if(isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $komentar = $_POST['komentar'];

            echo "<h3>Terima kasih atas kunjungan Anda, $nama!</h3>";
            echo "<p>Email: $email</p>";
            echo "<p>Komentar: $komentar</p>";
        }
        ?>
    </div>
</body>
</html>
