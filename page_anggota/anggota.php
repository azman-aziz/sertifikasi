<?php include "../template/header.php" ?>
<?php include "../koneksi.php" ?>
<div class="col-md-10">
    <div class="container">
        <ul class="nav justify-content-between mt-3">
            <li class="nav-item">
                <h1 class="text-primary">Menu Anggota</h1>
            </li>
            <li class="nav-item mt-2">
             <a href="/sertifikasi/page_anggota/tambah_anggota.php" class="btn btn-primary" >Tambah Anggota</a>
        </ul>

        <?php 
     
     $query = ("SELECT * FROM tbanggota ");
     $buku = mysqli_query($db,$query);    
     
     ?>

        <table class="table table-bordered border-primary mt-3" id="tabel">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Janis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            foreach ($buku as $b ) : 
                
                ?>
            <tr>
            <th scope="row"><?= $i++?></th>
            <td><?= $b['nama']?></td>
            <td><?= $b['jeniskelamin']?></td>
            <td><?= $b['alamat']?></td>
            <td><?= $b['status']?></td>
            <td> <a href="/sertifikasi/page_anggota/edit_anggota.php?id=<?= $b['idanggota']?>" class="badge bg-success">edit</a> <a href="/sertifikasi/page_anggota/hapus_anggota.php?id=<?= $b['idanggota']?>" class="badge bg-danger">hapus</a> </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        </table>
        </div>
        </div>

<?php include "../template/footer.php" ?>