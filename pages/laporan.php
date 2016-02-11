<h1 class="page-header">Laporan Kehadiran</h1>
<br>
<form method="post" action="?id=14">
<input id="timepicker" name="jam1" type="text"> &nbsp;&nbsp; | &nbsp;&nbsp;
<input id="timepicker2" name="jam2" type="text"> &nbsp;&nbsp;
<input type="submit" name="cari_laporan" value="cari"></form>

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
<form action="print.php">
<input type="submit" value="Cetak" class="btn btn-success">
</form>