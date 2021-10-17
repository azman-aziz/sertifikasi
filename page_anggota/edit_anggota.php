<?php include "../template/header.php" ?>
<?php include "../koneksi.php" ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex  flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      <h1 class="h4"><i class="bi bi-people-fill"></i> Tambah Anggota  </h1>&nbsp;
      
      </div>

     
      <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-3 my-5">
            <div class="card-title text-primary">
                <h3 class="text-center"> Tambahkan data Anggota</h2>
                <hr class="color-secondary">
            </div>
            <div class="card-body">
            <?php 
            include "../koneksi.php";
                $id = $_GET['id'];
                 $query = ("SELECT * FROM tbanggota WHERE idanggota = '$id' ");
                 $tampilkan_anggota = mysqli_query($db,$query);
                 // $tampilkan_buku = mysqli_fetch_array($tampilkan_buku);
                 
                ?>

           
                <form id="myform"  action="" method="POST">

               
                <?php foreach ($tampilkan_anggota as $anggota):?>
                <div class="mb-3 ">
                <label for="exampleFormControlInput12" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput12" value="<?=$anggota['nama']?>" >
                </div>

                <div class="mb-3 ">
                <label  class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="kelamin">
                <option selected><?=$anggota['jeniskelamin']?></option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                
                </select>
                </div>

                <div class="mb-3 ">
                <label for="exampleFormControlInput32" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="exampleFormControlInput32" placeholder="isi dengan benar" value="<?=$anggota['alamat']?>" >
                </div>

                <div class="mb-3 ">
                <label  class="form-label">Status Peminjaman</label>
                <select class="form-select" aria-label="Default select example" name="status">
                <option selected><?=$anggota['status']?></option>
                <option value="Sedang Meminjam">Sedang Meminjam</option>
                <option value="Tidak Meminjam">Tidak Meminjam</option>
                
                </select>
                </div>
                <?php endforeach;?>


                
               

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
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];


        
    $query= "UPDATE tbanggota
    SET nama='$nama',jeniskelamin='$kelamin',alamat='$alamat',status='$status' WHERE idanggota ='$id'";


    $add = mysqli_query($db,$query);

   

    if($add){ ?>
        <script>alert('berhasil di Edit');
        window.location.replace("/sertifikasi/page_anggota/anggota.php");
        </script>
           
            
    <?php }else{ ?>
        <script>alert('Gagal di Edit');
        </script>
    
    <?php } } ?>

    <?php include "../template/footer.php" ?>