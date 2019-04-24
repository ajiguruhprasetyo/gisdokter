<?php
include ('template.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Geografis Dokter Kandungan di Surakarta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="judul">		
		<h2>Data Pasien Mengandungan dan Melahirkan</h2>
	</div>
	
	<br/>
	
	<a href="pasien.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include ('./dbconfig.php');
	$id_pasien = $_GET['id_pasien'];
	$query_mysql = mysql_query("SELECT * FROM pasien WHERE id_pasien='$id_pasien'")or die(mysql_error());
	//$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update_pasien.php" method="post">		
		<table>
			<tr>
				<td>Id Pasien</td>
				<td><input type="text" name="id_pasien" value="<?php echo $data['id_pasien'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="name" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>"></td>					
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $data['umur'] ?>"></td>					
			</tr>	
			<!-- <tr>
				<td>ID Dokter</td>
				<td><input type="text" name="nik" value="<?php echo $data['nik'] ?>"></td>					
			</tr>  -->	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="lat" value="<?php echo $data['lat'] ?>"></td>					
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="lng" value="<?php echo $data['lng'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } 
	?>
	
	<footer>
		<div class="navbar-inverse text-center"><br><br>
			<div><p style="color:#f5f5f5"><b>Copyright&copy; SIG Surakarta 2017</b></p></div>
			<br><br>
		</div>
	</footer>
</body>
</html>