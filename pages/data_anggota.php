<div class="panel panel-primary">
	<div class="panel-heading">
		<center><b>Data Anggota</b></center>
	</div>
</div>
	<br>
		<div class="col-lg-4 col-md-offset-3">
			<form method="post" action="?id=15">
				<input id="timepicker" name="cari" type="text" class="form-control" width="200" placeholder="Search">
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
		if(! $koneksi )
			{
	  			die('Gagal Koneksi: ' . mysql_error());
			}
		$sql = 'SELECT * from anggota';
	 
		mysql_select_db('registrasi');
		$ambildata = mysql_query( $sql, $koneksi);
		if(! $ambildata )
		{
	  		die('Gagal ambil data: ' . mysql_error());
		}
			echo "<table class='table-responsive table-bordered table'><tr><th>ID</th><th>NAK</th><th>NAMA</th><th>NIK</th></tr>";
			while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
		{
	    	echo "<tr><td>{$row['id']}</td><td>{$row['nak']}</td><td>{$row['nama']}</td>
				<td>{$row['nik']}</td></tr>";
		} 
	?>
