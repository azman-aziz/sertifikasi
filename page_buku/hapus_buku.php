<?php
include'../koneksi.php';

$idbuku	=	$_GET['id'];

$hapus = mysqli_query($db,
	"DELETE FROM buku
	WHERE id_buku ='$idbuku'"
);

if($hapus){ ?>
    <script>alert('berhasil di Hapus');
    window.location.replace("/sertifikasi/");
    </script>
    
       
        
<?php }else{ ?>
    <script>alert('Gagal di Hapus');
    window.location.replace("/sertifikasi/");
    </script>

<?php } ?>