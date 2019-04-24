<?php 
include ('dbconfig.php');
$id_pasien = $_GET['id_pasien'];
mysql_query("DELETE FROM pasien WHERE id_pasien='$id_pasien'")or die(mysql_error());
 
header("location:pasien.php?pesan=hapus");
?>