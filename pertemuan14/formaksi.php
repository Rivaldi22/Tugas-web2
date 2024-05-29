<?php
//koneksi dengan basis data
include 'koneksi.php';
//menampung data yang di kirim oleh form
echo $kode=$_POST['kode'];
echo $jumlah=$_POST['jumlah'];

//menginput data ke database
mysqli_query($koneksi,"call update_datatable('$kode','$jumlah')");
//mengalihkan halaman kembali ke index.php
header("location:form.php");
?>