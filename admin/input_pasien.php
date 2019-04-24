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
 
	<a href="pasien.php">Lihat Data Pasien</a>
 
	<br/>
	<h3>Input data pasien</h3>
	<form action="action_input_pasien.php" method="post">		
		<table>
			<tr>
				<td>Kode Pasien</td>
				<td><input type="text" name="id_pasien"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="name" name="nama_pasien"></td>					
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur"></td>					
			</tr>
			<!--<tr>
				<td>ID Dokter</td>
				<td><input type="text" name="nik"></td>					
			</tr>-->
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="lat"></td>					
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="lng"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>