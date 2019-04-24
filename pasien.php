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