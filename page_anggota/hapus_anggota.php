<?php
include'../koneksi.php';

$ida	=	$_GET['id'];

$hapus = mysqli_query($db,
	"DELETE FROM tbanggota
	WHERE idanggota ='$ida'"
);

if($hapus){ ?>
    <script>alert('berhasil di Hapus');
    window.location.replace("/sertifikasi/page_anggota/anggota.php");
    </script>
    
       
        
<?php }else{ ?>
    <script>alert('Gagal di Hapus');
    window.location.replace("/sertifikasi/page_anggota/anggota.php");
    </script>

<?php } ?>