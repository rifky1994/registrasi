<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');


$hapus = $_POST['hapus'];

		$sql9 = "SELECT * from kehadiran where nak=$hapus";
		$eksekusi2 = mysqli_query($konek,$sql9);
		$record = mysqli_num_rows($eksekusi2);

		$sql8 = "delete from kehadiran where nak=$hapus";
		$eksekusi = mysqli_query($konek,$sql8);

		if ($record==0)
		{
			$sql7 = "delete from kuasa where nak=$hapus";
		$eksekusi = mysqli_query($konek,$sql7);
		
		}
		else
		{
		$sql7 = "delete from kuasa where id_kuasa=$hapus";
		$eksekusi = mysqli_query($konek,$sql7);	
		}
		
		
		echo "$hapus";
		include "laporan.php";
?>