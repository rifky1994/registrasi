<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
require_once("dompdf/dompdf_config.inc.php");

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');  


mysql_select_db("registrasi");




$sqlll = mysql_query("SELECT kehadiran.nak,nama,nik,status,no_kupon,id_kuasa,user,waktu from kehadiran join anggota using (nak) order by id");

$nak = array();
$nama = array();
$nik = array();
$status = array();
$no_kupon = array();
$id_kuasa = array();
$user = array();
$waktu = array();
while ($rows = mysql_fetch_assoc($sqlll))
{
    array_push($nak, $rows['nak']);
    array_push($nama, $rows['nama']);
    array_push($nik, $rows['nik']);
    array_push($status, $rows['status']);
    array_push($no_kupon, $rows['no_kupon']);
    array_push($id_kuasa, $rows['id_kuasa']);
    array_push($user, $rows['user']);
    array_push($waktu, $rows['waktu']);
    
}
$hitung = count($nak);
//foreach (array_combine($codes, $names) as $code => $name) {
$i=1;
$gabung = array_merge($nak,$nama,$nik);
//foreach (array_combine($nak,$nama,$nik,$status,$no_kupon,$id_kuasa,$user,$waktu) as $val=>$val2=>$val3=>$val4=>$val5=>$val6=>$val7=>$val8) 
for ($i;$i=$hitung;$i++)
{
  ${"variable$i"} = "";
}

foreach ($gabung as $val)
{   

    $keluar2 .= '<tr><td>'.$i.'</td><td>'.$val.'</td></tr>';
    $i++;
}
 

    

$html =
  '<html><body>'.
  '<script type=text/javascript>
  try {
    this.print();
  }
  </script>'.
  '<h1>Laporan Kehadiran'.$hitung.'</h1>'.
  '<br><table>'.$keluar2.'</table></body></html>';


$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('Laporan_'.$row[nama].'.pdf', array("Attachment" => false));

?>