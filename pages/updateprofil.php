<?php


$konek = mysqli_connect('localhost','root','','registrasi');
$db_select = mysqli_select_db($konek,'registrasi');
if ($db_select)
{
	if (isset($_POST['ubah'])) {
	$nak= $_POST['nak'];
	$nama= $_POST['nama'];
	$pass= $_POST['password'];
	$insert = "Update user set nama='$nama', password='$pass' where nak='$nak'";
	$sql=mysqli_query($konek,$insert);
	$insert2 = "Update anggota set nama='$nama' where nak='$nak'";
	$sql2=mysqli_query($konek,$insert2);
			if ($sql){

				include_once "index.php";
				echo "<br>Data berhasil diubah";		
				}
				else
				{
				echo "gagal insert";
				}
	}
	else
	{
	echo "gagal";
	}
}
else
{
	echo "tidak konek";
}

?>