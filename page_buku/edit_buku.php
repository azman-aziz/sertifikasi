<?php include "../koneksi.php" ?>
<?php include "../template/header.php" ?> 

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      <h1 class="h4"><i class="bi bi-book"></i>  Edit Buku  </h1>&nbsp;
      
      </div>

     
      <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-3 my-5">
            <div class="card-title text-primary">
                <h3 class="text-center"> Edit data Buku</h2>
                <hr class="color-secondary">
            </div>
            <div class="card-body">
            <?php 
                $id = $_GET['id'];
                 $query = ("SELECT * FROM buku WHERE id_buku = '$id' ");
                 $tampilkan_buku = mysqli_query($db,$query);
                 // $tampilkan_buku = mysqli_fetch_array($tampilkan_buku);
                ?>

           
                <form id="myform"  action="" method="POST">

                <?php foreach ($tampilkan_buku as $buku):?>
                <div class="mb-3 ">
                <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="isi dengan benar" value="<?=$buku['judul']?>" required >
                </div>

                <div class="mb-3 ">
                <label for="exampleFormControlInput12" class="form-label">Nomor ISBN</label>
                <input type="text" class="form-control" name="isbn" id="exampleFormControlInput12" placeholder="isi dengan benar" value="<?=$buku['isbn']?>" required>
                </div>

                <div class="mb-3 ">
                <label for="exampleFormControlInput22" class="form-label">Nama Pengarang</label>
                <input type="text" class="form-control" name="pengarang" id="exampleFormControlInput22" placeholder="isi dengan benar" value="<?=$buku['pengarang']?>" required>
                </div>
                
                <?php endforeach;    ?>

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

    <?php 

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $isbn = $_POST['isbn'];
    $pengarang = $_POST['pengarang'];

        
    $query= "UPDATE buku
    SET judul='$judul',isbn='$isbn',pengarang='$pengarang' WHERE id_buku ='$id'";


    $add = mysqli_query($db,$query);

   

    if($add){ ?>
        <script>alert('berhasil di Edit');
        window.location.replace("/sertifikasi/");
        </script>
           
            
    <?php }else{ ?>
        <script>alert('Gagal di Edit');
        </script>
    
    <?php } } ?>

   
    <?php include "../template/footer.php" ?> 
    