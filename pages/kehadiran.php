<h1 class="page-header">Absensi</h1>
<form action="?id=4" method="post">
	<table>
		<tr><td>NAK</td><td>:</td><td><input type="text" name="nak" size="10"></td><td>&nbsp;&nbsp;&nbsp;</td>
		<td>Status</td><td>:</td><td>	<select name="status">
											<?php ?>
											<option name="hadir" value="HADIR">HADIR</option>
											<?php ?>
											<option name="kuasa" value="KUASA">KUASA</option>
										</select></td><td><input type="submit" name="tambah" value="Tambah Absensi" /></td></tr>
	</table>
</form>


<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = "SELECT * from kehadiran join anggota using (nak) where temp=1 and user='mira'";

 
mysql_select_db('registrasi');
$ambildata = mysql_query( $sql, $koneksi);

if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}

if ($ambildata==null)
{}
else
{
echo "<form action='?id=5' method='POST'>";
echo "<table border='1'><tr><th>NAK</th><th>Nama</th><th>kehadiran</th><th>waktu</th></tr>";
}
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['status']}</td>
	<td>{$row['waktu']}</td>
	
	

	
</tr>";
} 

$sql3 = "SELECT id_kuasa from kehadiran where temp=1 and user='mira'";
$ambildata3 = mysql_query( $sql3, $koneksi);
while($row = mysql_fetch_array($ambildata3, MYSQL_ASSOC))
{
	$id_kuasa=$row['id_kuasa'];
} 



$sql2 = "SELECT * from kuasa join anggota using (nak) where temp=1 and user='mira' and id_kuasa='$id_kuasa'";
$ambildata2 = mysql_query( $sql2, $koneksi);
while($row = mysql_fetch_array($ambildata2, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['status']}</td>
	<td>{$row['waktu']}</td>
	
	

	
</tr>";
} 

 
echo "</table>";

?>
<input type='submit' name='simpan_transaksi' value='Simpan Absensi' onclick="return confirm('Absensi Selesai?')"/>