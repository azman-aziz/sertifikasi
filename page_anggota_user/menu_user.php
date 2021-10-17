<?php 
session_start();

if(!isset($_SESSION["anggota"]) && !isset($_SESSION["sesi"]) ){

  echo "<script>alert('Anda Harus Log In');</script>";
  header("Location:/sertifikasi/page_anggota_user/login_anggota.php");
}?>
<?php include "../koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand text-center" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a> -->
            <a href="../logout.php" class="btn btn-danger">Logout</a>
        </div>
        </div>
    </div>
    </nav>
    <?php 
     
     $query = ("SELECT * FROM buku ");
     $buku = mysqli_query($db,$query);    
     
     ?>

    <div class="container">
        <div class="row">
            <?php 
            
            foreach ($buku as $b ):
                 ?>
            <div class="col-md-3">
            <div class="card m-3 p-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Buku: <?= $b['judul']?></h5>
                    <p class="card-text">Nomer ISBN: <?= $b['isbn']?></p>
                    <p class="card-text">Pengarang: <?= $b['pengarang']?></p>
                </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">