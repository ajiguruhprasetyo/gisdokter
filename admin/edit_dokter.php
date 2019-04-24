<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Geografis Dokter Kandungan di Surakarta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="judul">		
		<h2>Data Praktek Dokter Kandungan Surakarta</h2>
	</div>
	
	<br/>
	
	<a href="dokter.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
		include ('dbconfig.php');
		$nik = $_GET['nik'];
		$query_mysql = mysql_query("SELECT * FROM data_dokter WHERE nik='$nik'")or die(mysql_error());
		//$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_dokter.php" method="post">		
		<table>
			
			<tr>
				<td>NIK</td>
				<td>
					<input type="text" name="nik" value="<?php echo $data['nik'] ?>">
				</td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender" value="<?php echo $data['gender'] ?>"></td>					
			</tr>	
			<tr>
				<td>Tempat Praktek</td>
				<td><input type="text" name="tempat_praktek" value="<?php echo $data['tempat_praktek'] ?>"></td>					
			</tr>	
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="lang_dok" value="<?php echo $data['lang_dok'] ?>"></td>					
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="long_dok" value="<?php echo $data['long_dok'] ?>"></td>					
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } 
	?>
</body>
</html>