<?php 
 
include 'dbconfig.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempat_praktek = $_POST['tempat_praktek'];
$lang_dok = $_POST['lang_dok'];
$long_dok = $_POST['long_dok'];
 
mysql_query("UPDATE data_dokter SET nama='$nama', gender='$gender', tempat_praktek='$tempat_praktek', lang_dok='$lang_dok', long_dok='$long_dok' WHERE nik='$nik'");
 
header("location:dokter.php?pesan=update");
?>