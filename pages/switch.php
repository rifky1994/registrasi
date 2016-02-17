<?php
$link = $_GET['id'];
 
 switch($link) 
 {
 	case 1 :
	include "kehadiran.php";
	break;
	case 2 :
	include "lihatkehadiran.php";
	break;
	case 3 :
	include "data_anggota.php";
	break;
	case 4 :
	include "kehadiran2.php";
	break;
	case 5 :
	include "proseslogin.php";
	break;
	case 6 :
	include "kehadiran3.php";
	break;
	case 7:
	include "laporan.php";
	break;
	case 8:
	include "upload_data_anggota.php";
	break;
	case 9:
	include "ekspor_data_anggota.php";
	break;
	case 10:
	include "profil.php";
	break;
	case 11:
	include "updateprofil.php";
	break;
	case 12:
	include "print_bukti_pembayaran.php";
	break;
	case 13:
	include "print_bukti.php";
	break;
	case 14:
	include "cari_laporan.php";
	break;	
	case 15:
	include "cari_anggota.php";
	break;	
	case 16:
	include "inputbendahara.php";
	break;
	case 17:
	include "prosesinputbendahara.php";
	break;
	case 18:
	include "inputkuasa.php";
	break;
	case 19:
	include "prosesinputkuasa.php";
	break;
	case 20:
	include "cariinputkuasa.php";
	break;
	case 21:
	include "cetakkupon.php";
	break;
	case 22:
	include "prosescetakkupon.php";
	break;
	case 23:
	include "caricetakkupon.php";
	break;
	case 24:
	include "cariprintbtukti.php";
	break;
	case 99:
	include "hapussemua.php";
	break;
	case 100:
	include "formhapussemua.php";
	break;
	default :
	include "kehadiran.php";
	break;

}
?>