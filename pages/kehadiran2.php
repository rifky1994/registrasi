<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');

$tanggal = date("Y-m-d");
$jam = gmdate("H:i:s",time()+60*60*7);
$tanggaljam = $tanggal." ".$jam;

	if (isset($_POST['tambah'])) 
	{
	$nak= $_POST['nak'];
	$status= $_POST['status'];

	if ($status=="hadir")
	{

			if(! $koneksi )
		{
		  die('Gagal Koneksi: ' . mysql_error());
		}
				
		$insert = "INSERT INTO kehadiran (nak,status,temp,user,waktu,id_kuasa) values ('$nak','$status',1,'mira','$tanggaljam',$nak)";
		$sql=mysqli_query($konek,$insert);
			if ($sql)
				{
					
				}
			else
				{
					echo "gagal insert";
				}

	}
	else
	{
			
			$sql3 = "SELECT id_kuasa from kehadiran where temp=1 and user='mira'";
			$ambildata3 = mysqli_query( $konek,$sql3);
			while($row = mysqli_fetch_array($ambildata3, MYSQL_ASSOC))
			{
				$id_kuasa=$row['id_kuasa'];
			} 
			


		$insert = "INSERT INTO kuasa (nak,status,temp,user,waktu,id_kuasa) values ('$nak','$status',1,'mira','$tanggaljam',$id_kuasa)";
		$sql=mysqli_query($konek,$insert);
			if ($sql)
				{
					
				}
			else
				{
					echo "gagal insert";
				}


	}


		

	}
	else
	{}
	
?>






