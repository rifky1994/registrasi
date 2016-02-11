<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
$konek = mysqli_connect('localhost','root','','registrasi');



	if (isset($_POST['tambah'])) 
	{
	$nak= $_POST['nak'];
	$status= $_POST['status'];

		$esqiel = "SELECT nak from anggota where nak='$nak'";
		$takedata = mysqli_query( $konek,$esqiel);
		$baris = mysqli_fetch_array($takedata, MYSQL_ASSOC);
		if ($nak <> $baris['nak'])
		{
			?>
					<SCRIPT LANGUAGE="JavaScript">
					window.alert ("Data anggota tidak ada !!!");
					window.location.href="?id=1";
					</SCRIPT>
					<?php
		}
		else
		{


	if ($status=="HADIR")
	{
		$sql4 = "SELECT status from kehadiran where temp=1 and user='$_SESSION[nama]'";
		$ambildata4 = mysqli_query( $konek,$sql4);
		while($rows = mysqli_fetch_array($ambildata4, MYSQL_ASSOC))
		{
			$statuss=$rows['status'];
		}
			if ($statuss == "HADIR")
				{
					?>
					<SCRIPT LANGUAGE="JavaScript">
					window.alert ("Data Hadir Sudah Ada, Hanya Dapat Memasukan Status Kuasa !!!");
					window.location.href="?id=1";
					</SCRIPT>
					<?php
				}
				else
				{

						$sql5 = "SELECT * from kuasa where nak=$nak";
						$ambildata5 = mysqli_query( $konek,$sql5);
						$rows = mysqli_fetch_array($ambildata5, MYSQL_ASSOC);
						if ($rows == null)
						{	


							if(! $koneksi )
							{
							  die('Gagal Koneksi: ' . mysql_error());
							}
									
							$insert = "INSERT INTO kehadiran (nak,status,temp,user,id_kuasa) values ('$nak','$status',1,'$_SESSION[nama]',$nak)";
							$sql=mysqli_query($konek,$insert);
								if ($sql)
									{
										include "kehadiran.php";
									}
								else
									{
										?>
							<SCRIPT LANGUAGE="JavaScript">
							window.alert ("Anggota sudah melakukan Absen !!!");
							window.location.href="?id=1";
							</SCRIPT>
							<?php
									}
						}
						else
						{
							?>
							<SCRIPT LANGUAGE="JavaScript">
							window.alert ("Anggota sudah melakukan Absen !!!");
							window.location.href="?id=1";
							</SCRIPT>
							<?php
						}
				}

	}
	else if ($status=="KUASA")
	{
			
			$sql3 = "SELECT id_kuasa from kehadiran where temp=1 and user='$_SESSION[nama]'";
			$ambildata3 = mysqli_query( $konek,$sql3);
			while($row = mysqli_fetch_array($ambildata3, MYSQL_ASSOC))
			{
				$id_kuasa=$row['id_kuasa'];
			} 
			
			$sql6 = "SELECT * from kehadiran where nak=$nak";
			$ambildata6 = mysqli_query( $konek,$sql6);
			$rows = mysqli_fetch_array($ambildata6, MYSQL_ASSOC);
			if ($rows == null)
			{	

				$insert = "INSERT INTO kuasa (nak,status,temp,user,id_kuasa) values ('$nak','$status',1,'$_SESSION[nama]',$id_kuasa)";
				$sql=mysqli_query($konek,$insert);
				if ($sql)
					{
						include "kehadiran.php";	
					}
				else
					{
						?>
							<SCRIPT LANGUAGE="JavaScript">
							window.alert ("Anggota sudah melakukan Absen !!!");
							window.location.href="?id=1";
							</SCRIPT>
							<?php
					}
			}
			else
			{
				?>
				<SCRIPT LANGUAGE="JavaScript">
				window.alert ("Anggota sudah melakukan Absen !!!");
				window.location.href="?id=1";
				</SCRIPT>
				<?php
			}

	}
	else {

		?>
							<SCRIPT LANGUAGE="JavaScript">
							window.alert ("Anggota sudah melakukan Absen !!!");
							window.location.href="?id=1";
							</SCRIPT>
							<?php
	}


		

	}
}
	else
	{

	}
	
?>






