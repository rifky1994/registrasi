<?php
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	$konek = mysqli_connect('localhost','root','','registrasi');

	$sql4 = "SELECT status from kehadiran where temp=1 and user='$_SESSION[nama]'";
		$ambildata4 = mysqli_query( $konek,$sql4);
		while($rows = mysqli_fetch_array($ambildata4, MYSQL_ASSOC))
		{
			$statuss=$rows['status'];
		}
?>
<div class="panel panel-primary">
	<div class="panel-heading">
		<center>
			<b>Input Absensi</b>
		</center>
	</div>
</div>
<center>
	<h1 class="page-header">Absensi</h1>
	<form action="?id=4" method="post">
		<table>
			<tr><td>

			
			<input type="text"name="nak" size="25" class="form-control" placeholder="NAK">
			

			</td><td class="col-md-2"></td>
			<td></td><td>	<select class="form-control" name="status">
												<?php if ($statuss=="HADIR") {} else {?>
												<option name="hadir" value="HADIR">HADIR</option>
												<?php }?>
												<option name="kuasa" value="KUASA">KUASA</option></select></td></tr>
		</table>
		<br>
		</select></td><td><input class='btn btn-success' size="20px" type="submit" name="tambah" value="Tambah Absensi" />
		<input  class='btn btn-success' type='submit' name='cari' value='Cari' /></td></tr>
	</form>
</center>
<hr>


<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = "SELECT * from kehadiran join anggota using (nak) where temp=1 and user='$_SESSION[nama]'";

 
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
echo "<form action='?id=6' method='POST'>";
echo "<table border='1' class='table-responsive table-bordered table'><tr><th>NAK</th><th>Nama</th><th>Status</th><th>Hapus</th></tr>";
}
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['status']}</td>
	<td><input type='radio' name='hapus_anggota' value='{$row['nak']}'></td>
		
	

	
</tr>";
} 

$sql3 = "SELECT id_kuasa from kehadiran where temp=1 and user='$_SESSION[nama]'";
$ambildata3 = mysql_query( $sql3, $koneksi);
while($row = mysql_fetch_array($ambildata3, MYSQL_ASSOC))
{
	$id_kuasa=$row['id_kuasa'];
} 



$sql2 = "SELECT * from kuasa join anggota using (nak) where temp=1 and user='$_SESSION[nama]' and id_kuasa='$id_kuasa'";
$ambildata2 = mysql_query( $sql2, $koneksi);
while($row = mysql_fetch_array($ambildata2, MYSQL_ASSOC))
{
	
    echo "<tr id=biasa>
	<td>{$row['nak']}</td>
	<td>{$row['nama']}</td>
	<td>{$row['status']}</td>
	<td><input type='radio' name='hapus_anggota' value='{$row['nak']}'></td>
		
	

	
</tr>";
} 

 
?></table>

<center>
<input  class='btn btn-success' type='submit' name='simpan' value='Simpan Absensi' onclick="return confirm('Absensi Selesai?')"/>


<input class='btn btn-success' type='submit' name='hapus' value='Hapus Kehadiran' onclick="return confirm('Akan dihapus?')"/>
<input class='btn btn-success' type='submit' name='hapus_semua' value='Hapus Semua Data' onclick="return confirm('Akan dihapus?')"/>

</form></center>