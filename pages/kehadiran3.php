<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');

$tanggal = date("Y-m-d");
$jam = gmdate("H:i:s",time()+60*60*7);
$tanggaljam = $tanggal." ".$jam;

if (isset($_POST['simpan'])) 
	{
		$sql4 = "update kehadiran set temp=0, waktu='$tanggaljam' where temp=1 and user='$_SESSION[nama]'";
		$update = mysqli_query( $konek,$sql4);

		$sql5 = "update kuasa set temp=0, waktu='$tanggaljam' where temp=1 and user='$_SESSION[nama]'";
		$update2 = mysqli_query( $konek,$sql5);

		include "kehadiran.php";
	}

?>