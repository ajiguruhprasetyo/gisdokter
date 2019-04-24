<?php 
include ('dbconfig.php');
$nik = $_GET['nik'];
mysql_query("DELETE FROM data_dokter WHERE nik='$nik'")or die(mysql_error());
 
header("location:dokter.php?pesan=hapus");
?>