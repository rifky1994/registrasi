<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
require_once("dompdf/dompdf_config.inc.php");
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db("registrasi");
$sqlll = mysql_query("SELECT anggota.id,kuasa.nak,nama,nik,status,no_kupon,id_kuasa,user from kuasa join anggota using (nak) order by id");

$data = array();
while ($rows = mysql_fetch_assoc($sqlll))
{
	array_push($data, $rows['nama']);
}
$i=2;
foreach ($data as $val) 
{
    $keluar .= ' '.$i.'.'.$val .'(500.000)';
    $i++;
}
echo $keluar;
?>