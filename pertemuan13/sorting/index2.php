<?php
$koneksi=mysqli_connect("localhost","root","","kampus");
$hasil=mysqli_query($koneksi, "select * from customers order by customerNumber asc "); // menampilkan dari atas ke bawah
echo "<table>
<tr>
<th>customerNumber</th>
<th>customerName</th>
<th>phone</th>
<th>address</th>
<th>city</th>
</tr>";


While($data=mysqli_fetch_array($hasil)){


echo "<tr>
<td>".$data['customerNumber']."</td>
<td>".$data['customerName']."</td>
<td>".$data['phone']."</td>
<td>".$data['address']."</td>
<td>".$data['city']."</td>
</tr>
</body>
</html>";
}
?>
