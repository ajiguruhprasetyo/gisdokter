<?php 
include ('dbconfig.php');

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tempat_praktek = $_POST['tempat_praktek'];
$lang_dok = $_POST['lang_dok'];
$long_dok = $_POST['long_dok'];

 
mysql_query("INSERT INTO data_dokter VALUES('nik','$nama','$gender','$tempat_praktek','lang_dok','long_dok')");
 
header("location:dokter.php?pesan=input");
?>