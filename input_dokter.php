
<?php
include ('template.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Geografis Dokter Kandungan di Surakarta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
			<h2>Data Praktek Dokter Kandungan Surakarta</h2>
	</div>
	
	<br/>
 
	<a href="dokter.php">Lihat Data Tabel</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="action_input_dokter.php" method="post">		
		<table>
			<tr>
				<td>NIK</td>
				<td><input type="text" name="nik"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="name" name="nama"></td>					
			</tr>	
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender"></td>					
			</tr>	
			<tr>
				<td>Tempat Praktek</td>
				<td><input type="text" name="tempat_praktek"></td>					
			</tr>	
			<tr>
				<td>Latitude</td>
				<td><input type="text" name="lang_dok"></td>					
			</tr>
			<tr>
				<td>Longitude</td>
				<td><input type="text" name="long_dok"></td>					
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>