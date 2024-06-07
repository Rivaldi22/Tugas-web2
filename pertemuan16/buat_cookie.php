<?php
$value='Rivaldi';
$value2='Rivaldi Hidayatullah';
setcookie("username",$value);
setcookie("namalengkap",$value2,time()+3600);/*expire in 1 hour*/
echo"<h1>Halaman Pembuatan cookie</h1>";
echo"<h2>Klik <a href='lihat_cookie.php'>disini</a> untuk lihat cookie</h2>";
?>