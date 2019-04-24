<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'gis_dokter';
$koneksi    = mysql_connect($host,$user,$pass);
     
    if(!$koneksi){
        die("Cannot connect to database.");
    }
     
    mysql_select_db($db);
 
?>