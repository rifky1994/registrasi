<div class="panel panel-primary">
    <div class="panel-heading">
		<center><b>Cetak Kupon Khusus Kuasa Yang Hadir</b></center>
	</div>
</div>

		<br>
		<div class="col-lg-4 col-md-offset-3">
			<form method="post" action="?id=23">
			<input name="cari" type="text" class="form-control" width="200" placeholder="Search">
		</div>
		<div class="col-lg-4">
				<input type="submit" name="cari_anggota" value="Cari Anggota" class="btn btn-info">
			</form>
		</div>	

<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');


 

$sql = "SELECT * from kuasa join anggota using (nak) where status2='HADIR' order by no_kupon";
$ambildata = mysql_query( $sql, $koneksi);
echo "<form method=post action='prosescetakkupon.php' target='_blank'>";
$record = mysql_num_rows($ambildata);

		if ($record>0)
		{
echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th><th>Cetak</th></tr>";
		}
		else
		{
			echo "<br><br><br><br><br>Data Belum ada";
		}
$i=1;






while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{

	
		    echo "<tr id=biasa>
			<td>$i</td>
			<td>{$row['nak']}</td>
			<td>{$row['nama']}</td>
			<td>{$row['nik']}</td>
			<td>{$row['status']}</td>
			<td>{$row['no_kupon']}</td>
			<td>{$row['user']}</td>
			<td>{$row['id_kuasa']}</td>
			<td>{$row['waktu']}</td>";
			
			if (($_SESSION['level']=='user') AND ($row['cetak']==1))
			{

			}
			else
			{
			echo "<td><input type='radio' name='hadir' value={$row['nak']}></td>";
			}			
			echo "</tr>";
			$i++;
		
	
} 


?>
</table>
<center>
<?php
if ($record>0)
		{

?>
	<input type="submit" value="Cetak" class="btn btn-success" name="cetak_bukti">
<?php
		}
?>
</center>
</form>