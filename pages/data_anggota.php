<h1 class="page-header"><center>Data Anggota</center></h1>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = 'SELECT * from anggota';
 
mysql_select_db('registrasi');
$ambildata = mysql_query( $sql, $koneksi);
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
echo "<table border='1' class='table-responsive table-bordered table'><tr><th>ID</th><th>NAK</th><th>NAMA</th><th>NIK</th></tr>";
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
    echo "<tr><td>{$row['id']}</td><td>{$row['nak']}</td><td>{$row['nama']}</td>
			<td>{$row['nik']}</td></tr>";
} 


?>