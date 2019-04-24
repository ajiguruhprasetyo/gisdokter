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
		<nav>
			<div class="judul">		
				<h2>Data Pasien Mengandungan dan Melahirkan</h2>
				<h3></h3>
			</div>
		</nav>
		<div class="container">
			<br/>
			<header>
			<?php 
				if(isset($_GET['pesan'])){
					$pesan = $_GET['pesan'];
					if($pesan == "input"){
						echo "Data berhasil di input.";
					}else if($pesan == "update"){
						echo "Data berhasil di update.";
					}else if($pesan == "delete"){
						echo "Data berhasil di hapus.";
					}
				}
			?>
			<br/>
			<a class="tombol" href="input_pasien.php">Tambah data pasien</a>
			<h3>Data pasien</h3>
			<table border="0" class="table">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Opsi</th>		
				</tr>
				<?php 
					include "dbconfig.php";
					$query_mysql = mysql_query("SELECT * FROM pasien")or die(mysql_error());
					//$nomor = 1;
					while($data = mysql_fetch_array($query_mysql)){
				?>
				<tr>
					<td><?php echo $data['id_pasien']; ?></td>
					<td><?php echo $data['nama_pasien']; ?></td>
					<td><?php echo $data['umur']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td>
						<a class="edit" href="edit_pasien.php?id_pasien=<?php echo $data['id_pasien']; ?>">Edit</a> 
						<a class="delete" href="delete_pasien.php?id_pasien=<?php echo $data['id_pasien']; ?>">Hapus</a>					
					</td>
				</tr>
				<?php 
					} 
				?>
			</table>
			</header>
			
			<div class="row">
				  <div class="col-lg-12">
					<hr>
					<footer>
						<p>&copy; 2017 by <a href="#">SISTEM INFORMASI GEOGRAFIS</a></p>
					</footer>
				  </div>
			</div>
		</div>
	</body>
</html>