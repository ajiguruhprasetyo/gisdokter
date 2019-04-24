 <?php  
  include ('dbconfig.php');  
  
  $id_berita = addslashes($_POST['id_berita']);
  $judul = addslashes($_POST['judul']);
  $kategori = addslashes($_POST['kategori']);  
  $deskripsi = addslashes($_POST['deskripsi']);  
  $tanggal = date('d M Y H:i');  
  #tangkap gambar  
  $namafolder="image/"; //folder tempat menyimpan file  
  if (!empty($_FILES["gambar"]["tmp_name"]))  
 {  
    $jenis_gambar=$_FILES['gambar']['type'];  
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")  
    {        
      $gambar = $namafolder . basename($_FILES['gambar']['name']);      
      if (move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar)) {  
        mysql_query("insert into berita values ('$id_berita','$judul','$kategori','$deskripsi','$tanggal','$gambar')",$koneksi);   
     ?>  
    <script language="javascript">  
            alert('Berhasil menambahkan');  
            document.location="index.php?link=lihatberita.php";  
          </script>  
     <?php  
      } else {  
       ?>  
    <script language="javascript">  
            alert('Gagal menambahkan');  
            document.location="index.php?link=tambahberita.php";  
          </script>  
     <?php  
      }  
    } else {  
      ?>  
    <script language="javascript">  
          alert('Gambar harus berformat .jpg .png .gif');  
          document.location="index.php?tambahberita.php";  
        </script>  
     <?php  
    }  
  } else {  
    echo "Anda belum memilih gambar";  
  }  
  ?>  