<?php
session_start();

if (isset($_SESSION['login_user'])){
	header("location:delete_dokter.php");
}else{
	header("location:admin.php");
}
?>