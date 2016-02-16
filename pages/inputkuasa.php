<div class="panel panel-primary">
    <div class="panel-heading">
		<center><b>Input Anggota Kuasa Yang Hadir</b></center>
	</div>
</div>

<form method="post" action="?id=20">
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


 


echo "<form method=post action='?id=19'>";
echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th><th></th></tr>";
$i=1;


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
	<td><input type='radio' name='hadir' value={$row['nak']}></td>

	
</tr>";
$i++;
} 

?>
</table>
<input type="submit" name="simpan" value="Simpan Absensi"></form>
