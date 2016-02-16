<div class="panel panel-primary">
    <div class="panel-heading">
		<center><b>Laporan Kehadiran</b></center>
	</div>
</div>

	

<br>
<center>
	<form method="post" action="?id=14">
	<input id="timepicker" name="jam1" type="text"> &nbsp;&nbsp; &nbsp;&nbsp;
	<input id="timepicker2" name="jam2" type="text"> &nbsp;&nbsp;
	<input type="submit" name="cari_laporan" value="cari" class="btn btn-success"></form>
</center>

<script type="text/javascript">
    // configuration value for the CSS style
    // this can be set locally or globally
    // review Configuration for details.
    // uncomment the line below in your code
    // var ng_config = {css_skin_prefix:"light_"};
</script>

<script type="text/javascript" src="1.2.2/ng_all.js"></script>
<script type="text/javascript" src="1.2.2/ng_ui.js"></script>
<script type="text/javascript" src="1.2.2/components/timepicker.js"></script>

<script type="text/javascript">
ng.ready( function() {
    var my_timepicker = new ng.TimePicker({
        input:'timepicker',
        format:'H:i:s',
        server_format:'H:i:s',
        use24:true,
        start:'00:00',
        end:'23:59'
    });
    
});
</script>
<script type="text/javascript">
ng.ready( function() {
    var my_timepicker = new ng.TimePicker({
        input:'timepicker2',
        format:'H:i:s',
        server_format:'H:i:s',
        use24:true,
        start:'00:00',
        end:'23:59'
    });
    
});
</script>
<center>
	<form action="print.php">
		<input type="submit" value="Cetak" class="btn btn-success">
	</form>
</center>
<br>
<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db('registrasi');
$sql = "SELECT * from kehadiran join anggota using (nak) order by no_kupon";

 

$ambildata = mysql_query( $sql, $koneksi);

echo "<table border='1' class='table-responsive table-bordered table'>
<tr><th>ID</th><th>Nak</th><th>Nama</th><th>NIK</th><th>Status</th><th>No Kupon</th><th>User</th><th>ID Kuasa</th><th>Waktu</th></tr>";
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
	<td>{$row['waktu']}</td>
	

	
</tr>";
$i++;
} 

$sql = "SELECT * from kuasa join anggota using (nak) order by no_kupon";
$ambildata = mysql_query( $sql, $koneksi);
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
	<td>{$row['waktu']}</td>

	
</tr>";
$i++;
} 

?>
</table>
<hr>

	<?php
		$sql = "SELECT count(nak) as nak from anggota";
		$ambildata = mysql_query( $sql, $koneksi);
		$row = mysql_fetch_array($ambildata, MYSQL_ASSOC);
		$semua=$row['nak'];

		$sql2 = "SELECT count(nak) as nak from kehadiran";
		$ambildata2 = mysql_query( $sql2, $koneksi);
		$row2 = mysql_fetch_array($ambildata2, MYSQL_ASSOC);
		$semua2=$row2['nak'];

		$sql3 = "SELECT count(nak) as nak from kuasa";
		$ambildata3 = mysql_query( $sql3, $koneksi);
		$row3 = mysql_fetch_array($ambildata3, MYSQL_ASSOC);
		$semua3=$row3['nak'];

		$jumlahhadir = $semua2 + $semua3;

		$persen = ($jumlahhadir / $semua) * 100;
		if ($persen <50)
		{
			?>
			<div class="alert alert-danger" role="alert">
			<?php
		echo "<b><center>Jumlah anggota $semua anggota<br>";
		echo "<b><center>Anggota Hadir $semua2 orang<br>";
		echo "<b><center>Anggota yang menguasakan $semua3 orang<br>";
		echo "<b><center>Total Anggota Hadir $jumlahhadir orang<br>";
		echo "Jumlah Quorum ";
		echo round($persen,2);
		echo "%<br>Status = Tidak Sah</b></center></div>";
		}
		else
		{
			?>
			<div class="alert alert-success" role="alert">
			<?php
		echo "<b><center>Jumlah anggota $semua anggota<br>";
		echo "<b><center>Anggota Hadir $semua2 orang<br>";
		echo "<b><center>Anggota yang menguasakan $semua3 orang<br>";
		echo "<b><center>Total Anggota Hadir $jumlahhadir orang<br>";
		echo "Jumlah Quorum ";
		echo round($persen,2);
		echo "%<br>Status = Sah</b></center></div>";
		}
	?>
<form action="printlaporansementara.php">
		<input type="submit" value="Cetak" class="btn btn-success">
	</form>
</div>

