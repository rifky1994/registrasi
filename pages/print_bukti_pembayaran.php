<div class="panel panel-primary">
    <div class="panel-heading">
		<center><b>Cetak Bukti Pembayaran</b></center>
	</div>
</div>

<form method="post" action="?id=24">
		<div class="col-lg-4">
				<input name="cari" type="text" class="form-control" width="200">
		</div>
		<div class="col-lg-4">
				<input type="submit" name="cari_anggota" value="Cari Anggota" class="btn btn-primary">
			</form>
		</div>
		<br>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');
$sql = "SELECT * from kehadiran join anggota using (nak) order by no_kupon";

 

$ambildata = mysql_query( $sql, $koneksi);
echo "<form action='print_bukti.php' method='post'>";
echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th><th>Cetak/Hapus</th></tr>";
$i=1;
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>$i</td>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['nik']}</td>
	<td>{$row['status']}</td>
	<td>{$row['no_kupon']}</td>
	<td>{$row['user']}</td>
	<td>{$row['id_kuasa']}</td>
	<td>{$row['waktu']}</td>
	<td align=center><input type='radio' name='cetak' value='{$row['id_kuasa']}'></td>
	
	
</tr>";
$i++;
} 

$sql = "SELECT * from kuasa join anggota using (nak) where status2<>'HADIR' order by no_kupon";
$ambildata = mysql_query( $sql, $koneksi);
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>$i</td>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['nik']}</td>
	<td>{$row['status']}</td>
	<td>{$row['no_kupon']}</td>
	<td>{$row['user']}</td>
	<td>{$row['id_kuasa']}</td>
	<td>{$row['waktu']}</td>
	<td align=center><input type='radio' name='cetak' value='{$row['id_kuasa']}'></td>

	
</tr>";
$i++;
} 


?>

</table>
<hr>
<center>
	
		<input type="submit" value="Cetak" class="btn btn-success" name="cetak_bukti">
	
</center>

</form>
