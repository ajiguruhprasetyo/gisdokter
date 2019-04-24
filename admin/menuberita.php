<?php  
 include ('dbconfig.php');  
  $ambil_recent = mysql_query("select id_berita,judul,tanggal from berita order by rand() limit 20",$koneksi);  
  ?>  
  <div class="well sidebar-nav">  
    <ul class="nav nav-list">  
      <li class="nav-header">Berita Terbaru</li>  
      <li><a href="tambahberita.php">Tambah Berita</a></li>  
      <li><a href="lihatberita.php">Lihat Berita</a></li>
      <li class="nav-header">Posting Terbaru</li>  
      <ul type="square">  
       <?php  
    while($hasil_recent= mysql_fetch_array($ambil_recent)){  
        echo "<li><a href='home.php?link=lihatdetailberita.php&id=$hasil_recent[id_berita]'>".$hasil_recent['judul']."</a></li>";  
    }  
    ?>  
      </ul>  
    </ul>  
</div><!--/.well ko-->   