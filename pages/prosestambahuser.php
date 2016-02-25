<?php


$konek = mysqli_connect('localhost','root','','registrasi');
$db_select = mysqli_select_db($konek,'registrasi');
if ($db_select)
{
	if (isset($_POST['simpan'])) {
	$nak= $_POST['nak'];
	$nama= $_POST['nama'];
	$pass= $_POST['password'];
	$level= $_POST['level'];
	$insert = "INSERT INTO user (nak,nama,password,level) VALUES ('$nak','$nama','$pass','$level')";
	$sql=mysqli_query($konek,$insert);
	
			if ($sql){

				echo "<br>Berhasil menambah user";
				include "tambahuser.php";		
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