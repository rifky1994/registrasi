<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
mysql_connect("localhost","root","");
mysql_select_db("registrasi");
$kueri = mysql_query('set @row_num = 0');

$sql = mysql_query("SELECT @row_num := @row_num + 1 as id ,kehadiran.nak,nama,nik,status,no_kupon,id_kuasa,user,waktu from kehadiran join anggota using (nak) order by id");
$data = array();
while ($row = mysql_fetch_assoc($sql))
{
	array_push($data, $row);
}



$judul = "Laporan Kehadiran";
$header = array (
	array("label"=>"ID","length"=>10,"align"=>"L"),
	array("label"=>"NAK","length"=>10,"align"=>"L"),
	array("label"=>"NAMA","length"=>42,"align"=>"L"),
	array("label"=>"NIK","length"=>15,"align"=>"L"),
	array("label"=>"Status","length"=>17,"align"=>"L"),
	array("label"=>"No Kupon","length"=>20,"align"=>"L"),
	array("label"=>"ID kuasa","length"=>15,"align"=>"L"),
	array("label"=>"User","length"=>35,"align"=>"L"),
	array("label"=>"Waktu","length"=>35,"align"=>"L"),
	);

require_once ("fpdf/fpdf.php");
$pdf = new FPDF();
$pdf -> AddPage();

$pdf ->SetFont('Arial','B','16');
$pdf -> Cell(0,20,$judul,'0',1,'c');

$pdf ->SetFont('Arial','','9');
$pdf ->SetFillColor(0,0,0);
$pdf ->SetTextColor(255);
$pdf ->SetDrawColor(0,0,0);
foreach ($header as $kolom)
{
	$pdf -> Cell($kolom['length'],5,$kolom['label'],1,'0',$kolom['align'],true);
}
$pdf -> Ln();

$pdf ->SetFillColor(200,200,200);
$pdf ->SetTextColor(0);
$pdf ->SetFont('');
$fill=false;
foreach ($data as $baris)
{
	$i=0;
	foreach ($baris as $cell)
	{
		$pdf -> Cell($header[$i]['length'],5,$cell,1,'0',$kolom['align'],$fill);
		$i++;
	}
	$fill = !$fill;
	$pdf -> Ln();
}

$sql2 = mysql_query("SELECT @row_num := @row_num + 1 as id,kuasa.nak,nama,nik,status,no_kupon,id_kuasa,user,waktu from kuasa join anggota using (nak) order by id");
$data2 = array();
while ($row2 = mysql_fetch_assoc($sql2))
{
	array_push($data2, $row2);
}



foreach ($data2 as $baris2)
{
	$j=0;
	foreach ($baris2 as $cell2)
	{
		$pdf -> Cell($header[$j]['length'],5,$cell2,1,'0',$kolom['align'],$fill);
		$j++;
	}
	$fill = !$fill;
	$pdf -> Ln();
}


$pdf -> Output();

?>