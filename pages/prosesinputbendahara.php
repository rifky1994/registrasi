<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');

isset($_POST['simpan']);
$nak=$_POST['nak'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];

mysql_select_db(registrasi);

$sql = "delete from bendahara";
mysqli_query($konek,$sql);

$insert ="insert into bendahara (nak,nama,nik) values ('$nak','$nama',$nik)";
mysql_query($insert);
include ('inputbendahara.php');

?>