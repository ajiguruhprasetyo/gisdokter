<?php
 //terima data input dari user
 $nama=$_POST['nama'];
 $email=$_POST['email'];
 $pesan=$_POST['pesan'];
 
//Prosses pengiriman
 $to=”ajiprasetya@live.com”;
 $subjek=”Kontak dari Form”;
 $from=”From: $nama <$email>”;
 
//kirimkan ke email admin
 @ mail($to, $subjek, $pesan, $from);
 echo “Pesan berhasil terikirim.”;
 
?>