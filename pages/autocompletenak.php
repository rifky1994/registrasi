<?php
mysql_connect('localhost','root','');
mysql_select_db('registrasi');

$kata = $_POST['kata'];
$sql = mysql_query ("SELECT nak, nama, nik FROM anggota where nak like '%$kata%' OR nama like '%$kata%' OR nik like '%$kata%'");
echo"<ul>";

while ($a=mysql_fetch_array($sql))
{
	$nak = str_replace($kata,"<b>$kata</b>",$a['nak']);
	$nama = str_replace($kata,"<b>$kata</b>",$a['nama']);
	$nik = str_replace($kata,"<b>$kata</b>",$a['nik']);
	echo"<li>$nak</li>";
}


?>