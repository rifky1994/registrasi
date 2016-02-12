<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
require_once("dompdf/dompdf_config.inc.php");

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');
$hapus= $_POST['cetak'];
if(isset($_POST['hapus_bukti']))
{
  
  

  $kueri = "delete from kehadiran where id_kuasa=$hapus";
  $eksekusi = mysqli_query($konek,$kueri);
  $kueri2 = "delete from kuasa where id_kuasa=$hapus";
  $eksekusi2 = mysqli_query($konek,$kueri2);
  
  header('location:index.php?id=12');

}
else 
{




    $nak= $_POST['cetak'];


$tahun = date("Y");
$bulan = date("n");
switch ($bulan) {
  case '1':
  $bulan2="Januari";
    break;
    case '2':
  $bulan2="Februari";
    break;
    case '3':
  $bulan2="Maret";
    break;
    case '4':
  $bulan2="April";
    break;
    case '5':
  $bulan2="Mei";
    break;
    case '6':
  $bulan2="Juni";
    break;
    case '7':
  $bulan2="Juli";
    break;
    case '8':
  $bulan2="Agustus";
    break;
    case '9':
  $bulan2="September";
    break;
    case '10':
  $bulan2="Oktober";
    break;
    case '11':
  $bulan2="November";
    break;
    case '12':
  $bulan2="Desember";
    break;
  default:
  echo "Bulan salah!!";
    break;
}
$tanggal=date("j");
$waktu = $tanggal." ".$bulan2." ".$tahun;




$sql = "SELECT anggota.id,kehadiran.nak,nama,nik,status,no_kupon,id_kuasa,user from kehadiran join anggota using (nak) where id_kuasa=$nak";
mysql_select_db("registrasi");
$ambildata = mysql_query( $sql, $koneksi);
$row = mysql_fetch_array($ambildata, MYSQL_ASSOC);

$sqlll = mysql_query("SELECT anggota.id,kuasa.nak,nama,nik,status,no_kupon,id_kuasa,user from kuasa join anggota using (nak) where id_kuasa=$nak order by id");

$data = array();
while ($rows = mysql_fetch_assoc($sqlll))
{
    array_push($data, $rows['nama']);
}
$i=1;
$bayar = $i * 500000;
$i=2;
$keluar='';
foreach ($data as $val) 
{
    $keluar .= ' '.$i.'.'.$val .'(500.000)';
    $i++;
}
 

$jumlah_desimal ="0";
$pemisah_desimal =".";
$pemisah_ribuan =",";
if ($i>1)
{$bayar=($i-1)*500000;} 
$tampil_bayar =  "Rp".number_format($bayar, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan);

require ('moneyFormat.php');
$moneyFormat = new moneyFormat();

$terbilang = $moneyFormat->terbilang($bayar);


    

$html =
  '<html><body>'.
  '<center><b><h2>TANDA TERIMA & REGISTRASI - RAT TAHUN BUKU 2016</h2><b></center><br>'.
  '<table>'.
  '<tr><td>No. Registrasi</td><td>:</td><td>'.$row[no_kupon].'</td><td align=center bgcolor=gray><font size=5><b>'.$row[no_kupon].'</b></font></td></tr>'.
  '<tr><td>Telah Terima Dari</td><td>:</td><td>KOPEGTEL DADALI BANDUNG</td></tr>'.
  '<tr><td>Jumlah</td><td>:</td><td>'.$tampil_bayar.'</td></tr>'.
  '<tr><td></td><td></td><td><font size=1>('.$terbilang.' Rupiah)</font></td></tr>'.
  '<tr><td>Untuk Pembayaran</td><td>:</td><td colspan=2>Biaya Transportasi RAT 2016 atas nama :</td></tr>'.
  '<tr><td></td><td></td><td colspan=2><font size=1>1.'.$row[nama].'(500.000)'.$keluar.'</td></tr>'.
  '<tr><td colspan=3></td><td>Bandung, '.$waktu.'</td></tr>'.
  '<tr><td align=center>Yang Menerima,</td><td colspan=2 align=center>Verifikasi,</td><td>Yang Membayarkan</td></tr>'.
  '<tr><td><br><br><br><br><br></td></tr>'.
  '<tr><td align=center><u>'.$row[nama].'</u></td><td colspan=2 align=center><u>'.$row['user'].'</u></td><td><u>RINI NURAENI</u></td></tr>'.
  '<tr><td align=center>'.$row[nak].'/'.$row[nik].'</td><td colspan=2 align=center>Petugas</td><td>Ass. MAN USP</td></tr></table>'.
  '<br><hr><br>'.
  '<center><b><h2>TANDA TERIMA & REGISTRASI - RAT TAHUN BUKU 2016</h2><b></center><br>'.
  '<table>'.
  '<tr><td>No. Registrasi</td><td>:</td><td>'.$row[no_kupon].'</td><td align=center bgcolor=gray><font size=5><b>'.$row[no_kupon].'</b></font></td></tr>'.
  '<tr><td>Telah Terima Dari</td><td>:</td><td>KOPEGTEL DADALI BANDUNG</td></tr>'.
  '<tr><td>Jumlah</td><td>:</td><td>'.$tampil_bayar.'</td></tr>'.
  '<tr><td></td><td></td><td><font size=1>('.$terbilang.' Rupiah)</font></td></tr>'.
  '<tr><td>Untuk Pembayaran</td><td>:</td><td colspan=2>Biaya Transportasi RAT 2016 atas nama :</td></tr>'.
  '<tr><td></td><td></td><td colspan=2><font size=1>1.'.$row[nama].'(500.000)'.$keluar.'</td></tr>'.
  '<tr><td colspan=3></td><td>Bandung, '.$waktu.'</td></tr>'.
  '<tr><td align=center>Yang Menerima,</td><td colspan=2 align=center>Verifikasi,</td><td>Yang Membayarkan</td></tr>'.
  '<tr><td><br><br><br><br><br></td></tr>'.
  '<tr><td align=center><u>'.$row[nama].'</u></td><td colspan=2 align=center><u>'.$row['user'].'</u></td><td><u>RINI NURAENI</u></td></tr>'.
  '<tr><td align=center>'.$row[nak].'/'.$row[nik].'</td><td colspan=2 align=center>Petugas</td><td>Ass. MAN USP</td></tr></table>'.
  '</html></body></html>';
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('Laporan_'.$row[nama].'.pdf');
}
?>