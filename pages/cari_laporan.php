  <div class="panel panel-primary">
    <div class="panel-heading">
      <b><center>Laporan Kehadiran</center></b>
    </div>
  </div>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');

isset($_POST['cari_laporang']); 
	$jam1 = $_POST['jam1'];
	$jam2 = $_POST['jam2'];



$sql = "SELECT * from kehadiran join anggota using (nak) where jam between '$jam1' and '$jam2' order by no_kupon";


$ambildata = mysql_query( $sql, $koneksi);

echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th></tr>";
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
	

	
</tr>";
$i++;
} 

$sql = "SELECT * from kuasa join anggota using (nak) where jam between '$jam1' and '$jam2' order by no_kupon";
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

	
</tr>";
$i++;
} 
?>
</table>