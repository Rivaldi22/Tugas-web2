<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    mysqli_query($konek,"insert into tblkategori set
    nama_kategori='$_POST[kategori]'");
    echo "tersimpan";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kategori</title>
</head>

<body>
    <h1>Form Kategori</h1>
    <form action="" method="post" autocomplete="off">
        <table width="100%" border="0" cellspacing="8" cellpadding="0">
            <tr>
                <td width="18%"><label for="judul">Kategori</label></td>
                <td width="2%">:</td>
                <td width="80%"> <input type="text" name="kategori" size="30"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="submit" value="Tambah Kategori baru">
                    <input type="reset" name="batal" value="Reset" class="tombol">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>