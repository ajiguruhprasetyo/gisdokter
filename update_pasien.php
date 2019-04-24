<?php 
 
include 'dbconfig.php';
$id_pasien = $_POST['id_pasien'];
$nama_pasien = $_POST['nama_pasien'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

mysql_query("UPDATE pasien SET nama_pasien='$nama_pasien', umur='$umur', nik='$nik', alamat='$alamat', lat='$lat', lng='$lng' WHERE id_pasien='$id_pasien'");
 
header("location:pasien.php?pesan=update");
?>