<?php 
include ('dbconfig.php');
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
 
mysql_query("INSERT INTO pasien VALUES('$id_pasien','$nama_pasien', '$umur', '$alamat', '$lat', '$lng')");
 
header("location:pasien.php?pesan=input");
?>