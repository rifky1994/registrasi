<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');
  
  $kueri = "delete from kehadiran";
  $eksekusi = mysqli_query($konek,$kueri);
  $kueri2 = "delete from kuasa";
  $eksekusi2 = mysqli_query($konek,$kueri2);

?>
<form action='?id=6' method='POST'>
	<div class="panel panel-danger">
	    <div class="panel-heading">
	      <b><center>Penghapusan Data</center></b>
	    </div>
	</div>
	<center>
		Apakah anda akan menghapus <strong>semua</strong> data?
		<input class='btn btn-danger' type='submit' name='hapus' value='Hapus Kehadiran' onclick="return confirm('Akan dihapus?')"/>
	</center>
</form>