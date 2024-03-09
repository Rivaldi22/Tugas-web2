<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator PHP</title>
</head>

<body>
    <h2>GO Kalkulator (Versi PHP)</h2>
    <p>©Rivaldi Hidayatullah 2024 </p>
    <b><label>=| INPUT ANGKA DAN PILIH OPERATOR|=</label></b>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="num1" style="float:left;" required>
        <select name="operator" required style="margin: 0 auto;">
            <option value="add">(+)</option>
            <option value="subtract">(-)</option>
            <option value="multiply">(*)</option>
            <option value="divide">(/)</option>
        </select>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="calculate" value="Hitung" style="float:left;">
        <input type="submit" name="clear" value="Hapus" style="float:left; margin-left: 10px;">
    </form>

    <?php
    // Fungsi aritmatika
    function hitung($num1, $num2, $operator)
    {
        switch ($operator) {
            case "add":
                return $num1 + $num2;
                break;
            case "subtract":
                return $num1 - $num2;
                break;
            case "multiply":
                return $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Error: Pembagian oleh nol";
                }
                break;
            default:
                return "Error: Operasi tidak valid";
        }
    }

    // Tombol submit
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        echo "<h3>=| OUTPUT |=</h3>";

        switch ($operator) {
            case "add":
                echo "Hasil: ";
                break;
            case "subtract":
                echo "Hasil: ";
                break;
            case "multiply":
                echo "Hasil: ";
                break;
            case "divide":
                echo "Hasil: ";
                break;
        }

        echo hitung($num1, $num2, $operator);
    }

    // Tombol clear
    if (isset($_POST['clear'])) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    ?>

</body>

</html>