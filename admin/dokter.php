<?php
	include ('template.php');
?>

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
		<div class="container">
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
			<a class="tombol" href="auth_input_dokter.php">Tambah Data Dokter</a>
			<h3>Data dokter</h3>
			<table border="1" class="table">
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Gender</th>
					<th>Tempat Praktek</th>
					<th>Opsi</th>		
				</tr>
					<?php 
						include "dbconfig.php";
						$query_mysql = mysql_query("SELECT * FROM data_dokter")or die(mysql_error());
						//no dokter urut berdasarkan no urut 1 2 3 seterusnya
						//$nomor = 1;
						while($data = mysql_fetch_array($query_mysql)){
					?>
				<tr>
					<td><?php echo $data['nik']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['gender']; ?></td>
					<td><?php echo $data['tempat_praktek']; ?></td>
					<td>
						<a class="edit" href="edit_dokter.php?nik=<?php echo $data['nik']; ?>">Edit</a> 
						<a class="delete" href="delete_dokter.php?nik=<?php echo $data['nik']; ?>">Hapus</a>					
					</td>
				</tr>
				<?php 
					} 
				?>
			</table>
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