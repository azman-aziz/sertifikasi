<?php include "../template/header.php" ?>
<?php include "../koneksi.php" ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      <h1 class="h4"><i class="bi bi-book"></i>  Tambah Buku  </h1>&nbsp;
      
      </div>

     
      <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-3 my-5">
            <div class="card-title text-primary">
                <h3 class="text-center"> Tambahkan data Buku</h2>
                <hr class="color-secondary">
            </div>
            <div class="card-body">

           
                <form id="myform"  action="" method="POST">

               
                <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="isi dengan benar" required >
                </div>

                <div class="mb-3 ">
                <label for="exampleFormControlInput12" class="form-label">Nomor ISBN</label>
                <input type="text" class="form-control" name="isbn" id="exampleFormControlInput12" placeholder="isi dengan benar" required>
                </div>

                <div class="mb-3 ">
                <label for="exampleFormControlInput22" class="form-label">Nama Pengarang</label>
                <input type="text" class="form-control" name="pengarang" id="exampleFormControlInput22" placeholder="isi dengan benar" required>
                </div>
                
               

                <div class="d-grid gap-2">
                <button class="btn btn-primary" name="submit" type="submit"> Kirim</button>
                </div>
                
                </form>
                
            </div>
            </div>
            </div>
        </div>
    </div>
    


    </main>
    <?php include "../template/footer.php" ?>


    <?php 

if(isset($_POST['submit'])){

    $judul = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];

        
    $query= " INSERT INTO `buku` value (NULL,'$judul','$isbn','$pengarang')";


    $add = mysqli_query($db,$query);

   

    if($add){ ?>
        <script>alert('berhasil di Tambah');
        window.location.replace("/sertifikasi/");
        </script>
           
            
    <?php }else{ ?>
        <script>alert('Gagal di Tambah');
        </script>
    
    <?php } } ?>