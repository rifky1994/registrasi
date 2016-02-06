<?php 
//memanggil fungsi
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}
 
function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}
 
function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}
 
function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}
 
//koneksi ke database dan jalankan query
mysql_connect('localhost', 'root', '');
mysql_select_db('registrasi');
$result = mysql_query("SELECT * FROM anggota ORDER BY id ASC");
!$result?die(mysql_error()):'';
 
//pengaturan nama file
$namaFile = "Data_Anggota.xls";
//pengaturan judul data
//$judul = "DAFTAR PROVINSI";
//baris berapa header tabel di tulis
$tablehead = 1;
//baris berapa data mulai di tulis
$tablebody = 2;

 
//penulisan header
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=".$namaFile."");
header("Content-Transfer-Encoding: binary ");
 
 
xlsBOF();
 
//xlsWriteLabel(0,0,$judul);  
 
$kolomhead = 0;
xlsWriteLabel($tablehead,$kolomhead++,"ID");             
xlsWriteLabel($tablehead,$kolomhead++,"NAK");
xlsWriteLabel($tablehead,$kolomhead++,"NAMA");
xlsWriteLabel($tablehead,$kolomhead++,"NIK");
 
while ($data = mysql_fetch_array($result))
{
$kolombody = 0;
 
//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string

xlsWriteNumber($tablebody,$kolombody++,$data['id']);
xlsWriteLabel($tablebody,$kolombody++,$data['nak']);
xlsWriteLabel($tablebody,$kolombody++,$data['nama']);
xlsWriteLabel($tablebody,$kolombody++,$data['nik']);
 
$tablebody++;
//$nourut++;
}
 
xlsEOF();
exit();
?>