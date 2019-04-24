 <?php  
  include ('dbconfig.php');  
  $ambil_data = mysql_query("select * from berita order by id_berita desc limit 0,5",$koneksi);  
  while($hasil_data = mysql_fetch_array($ambil_data)){  
  ?>  
   <div class="row-fluids">  
     <div class="span4">  
      <img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 400px; height: 250px;">  
     </div>  <br>
     <div class="span8">  
       <h2><?=$hasil_data['judul'];?></h2>  <br><br>
       <p style="text-align:justify;"><?=substr($hasil_data['deskripsi'],0,500);?></p>  
       <p>  
        <a href="home.php?link=lihatdetailberita.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a>   
        <a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a>  
       </p>  
     </div>     
    </div>  
    <hr>  
  <?php  
  }  
 ?>  