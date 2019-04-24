 <h2>Masukkan berita</h2>  
  <form class="form-horizontal" method="post" action="simpanberita.php" name="frmBerita" enctype="multipart/form-data">  
	 <div class="control-group">  
    <label class="control-label" for="inputId">Id Berita</label>  
    <div class="controls">  
     <input type="text" class="span12" placeholder="Id Berita" name="id_berita" required >  
    </div>  
   </div> 
  <div class="control-group">  
    <label class="control-label" for="inputJudul">Judul</label>  
    <div class="controls">  
     <input type="text" class="span12" placeholder="Judul Berita" name="judul" required >  
    </div>  
   </div> 
	
	<div class="control-group">  
    <label class="control-label" for="inputKategori">Kategori</label>  
    <div class="controls">  
     <input type="text" class="span12" placeholder="Kategori" name="kategori" required >  
    </div>  
   </div> 
   
   <div class="control-group">  
    <label class="control-label" for="inputDeskripsi">Isi Berita</label>  
    <div class="controls">  
     <textarea rows="5" cols="40" class="span12" name="deskripsi" required></textarea>  
   </div>  
   </div>  
   
   
   <div class="control-group">  
    <label class="control-label" for="inputGambar">Gambar Berita</label>  
    <div class="controls">  
     <input type="file" id="inputGambar" name="gambar" required>  
    </div>  
   </div>  
   <div class="control-group">  
    <div class="controls">  
     <button type="submit" class="btn btn-primary">Post</button>  
     <button type="reset" class="btn btn-inverse">Cancel</button>  
    </div>  
   </div>  
</form>   