<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');
$sql="Select * from bendahara";
$ambildata = mysql_query( $sql, $koneksi);
$row =mysql_fetch_array($ambildata);

$nak = $row['nak'];
$nama = $row['nama'];
$nik = $row['nik'];

?>


<form action="?id=17" method="post">
		<table>
<tr><td>NAK <input type="text"name="nak" size="25" class="form-control" <?php echo "value='$nak'";?>></td></tr>
<tr><td>Nama <input type="text"name="nama" size="25" class="form-control" <?php echo "value='$nama'";?>></td></tr>
<tr><td>NIK <input type="text"name="nik" size="25" class="form-control" <?php echo "value='$nik'";?>>
</table>
<input type="submit" name="simpan" value="Simpan">
</form>

