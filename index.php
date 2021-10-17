<?php include "./template/header.php" ?>
<?php include "./koneksi.php" ?>
<div class="col-md-10">
    <div class="container">
        <ul class="nav justify-content-between mt-3">
            <li class="nav-item">
                <h1 class="text-primary">Menu Buku</h1>
            </li>
            <li class="nav-item mt-2">
             <a href="/sertifikasi/page_buku/tambah_buku.php" class="btn btn-primary" >Tambah Buku</a>
        </ul>

        <?php 
     
     $query = ("SELECT * FROM buku ");
     $buku = mysqli_query($db,$query);    
     
     ?>

        <table class="table table-bordered border-primary mt-3" id="tabel">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">ISBN</th>
            <th scope="col">Pengarang</th>
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
            <td><?= $b['judul']?></td>
            <td><?= $b['isbn']?></td>
            <td><?= $b['pengarang']?></td>
            <td> <a href="/sertifikasi/page_buku/edit_buku.php?id=<?= $b['id_buku']?>" class="badge bg-success">edit</a> <a href="/sertifikasi/page_buku/hapus_buku.php?id=<?= $b['id_buku']?>" class="badge bg-danger">hapus</a> </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        </table>
        </div>
        </div>

<?php include "./template/footer.php" ?>