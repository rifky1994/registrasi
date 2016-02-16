<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
require_once("dompdf/dompdf_config.inc.php");

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');

		$sql = "SELECT count(nak) as nak from anggota";
		$ambildata = mysql_query( $sql, $koneksi);
		$row = mysql_fetch_array($ambildata, MYSQL_ASSOC);
		$semua=$row['nak'];

		$sql2 = "SELECT count(nak) as nak from kehadiran";
		$ambildata2 = mysql_query( $sql2, $koneksi);
		$row2 = mysql_fetch_array($ambildata2, MYSQL_ASSOC);
		$semua2=$row2['nak'];

		$sql3 = "SELECT count(nak) as nak from kuasa";
		$ambildata3 = mysql_query( $sql3, $koneksi);
		$row3 = mysql_fetch_array($ambildata3, MYSQL_ASSOC);
		$semua3=$row3['nak'];

		$jumlahhadir = $semua2 + $semua3;

		$persen = ($jumlahhadir / $semua) * 100;
		$tampil = round($persen,2);
		if ($persen <50)
		{
			
			$html ="<center><h1>Laporan Kehadiran Sementara</h1>
		<b>Jumlah anggota $semua anggota<br>
		Anggota Hadir $semua2 orang<br>
		Anggota yang menguasakan $semua3 orang<br>
		Total Anggota Hadir $jumlahhadir orang<br>
		Jumlah Quorum
		$tampil
		%<br>Status = Tidak Sah</b></center>";
		}
		else
		{
			
			$html ="<center><h1>Laporan Kehadiran Sementara</h1>
		Jumlah anggota $semua anggota<br>
		Anggota Hadir $semua2 orang<br>
		Anggota yang menguasakan $semua3 orang<br>
		Total Anggota Hadir $jumlahhadir orang<br>
		Jumlah Quorum
		$tampil
		%<br>Status = Sah</b></center></div>";
		}

 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('Laporan_Kehadiran_Sementara.pdf');

	?>
