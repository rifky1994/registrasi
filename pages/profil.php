<h1 class="page-header"><center>Profil</center></h1>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = "SELECT * from anggota join user using (nak) where nak='$_SESSION[nak]'";
 
mysql_select_db('registrasi');
$ambildata = mysql_query( $sql, $koneksi);
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
echo "<form action='?id=11' method='POST'>";
echo "<table>";
$row = mysql_fetch_array($ambildata, MYSQL_ASSOC);
echo "<tr><td width='100px'>NAK</td><td width='20px'>:</td><td><input type='text' name='nak' value='{$row[nak]}' readonly='readonly' class='form-control'></td><td>*digunakan untuk login*</td></tr>";
echo "<tr><td width='100px'>NIK</td><td width='20px'>:</td><td><input type='text' name='nik' value='{$row[nik]}' readonly='readonly' class='form-control'></td></tr>";
echo "<tr><td width='100px'>NAMA</td><td width='20px'>:</td><td><input type='text' name='nama' value='{$row[nama]}' class='form-control'></td></tr>";
echo "<tr><td width='100px'>Password</td><td width='20px'>:</td><td><input type='text' name='password' value='{$row[password]}' class='form-control'></td><td>*digunakan untuk login*</td></tr>";
echo "<tr><td colspan='3'><input type='submit' value='Update' name='ubah'  class='btn btn-success'></td></tr>";
echo "</table>";
echo "</form>";
?>