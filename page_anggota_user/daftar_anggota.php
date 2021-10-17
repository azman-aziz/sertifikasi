<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Silahkan Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <body class="text-center">
      <div class="container">
           <h1 class="text-primary"><i class="bi bi-book"></i>Perpustakaan</h1>
     
    
<main class="form-signin">
  <form action="" method="POST">
  
    <h5 class=" mb-3 fw-normal">Daftar Anggota</h5>

    <div class="form-floating">
      <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Masukan Username">
      <label for="floatingInput">Username</label>
    </div>

    <div class="mb-3 ">
                <label  class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="kelamin">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                
                </select>
                </div>

    <div class="form-floating">
      <input type="text" name="alamat" class="form-control" id="floatingInput" placeholder="Masukan Username">
      <label for="floatingInput">Alamat</label>
    </div>
    

    <button class="w-100 btn btn-lg btn-primary " name="submit" type="submit">Login</button>
    <p><a href="/sertifikasi/page_anggota_user/login_anggota.php">Login Sebagai User</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; <a href="https://linktr.ee/Azzman">Aziz Maulana</a> 2021</p>
  </form>
</main>

</div>

<?php


if( isset($_POST['submit']))
{
    include "../koneksi.php";
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $status = null;

    
        
     $query= " INSERT INTO `tbanggota` value ( NUll ,'$nama','$kelamin','$alamat', '$status')";



    $add = mysqli_query($db,$query);

   

    if($add){ ?>
        <script>alert('berhasil di Daftar');
        window.location.replace("/sertifikasi/page_anggota_user/login_anggota.php");
        </script>
           
            
    <?php }else{ ?>
        <script>alert('Gagal di Tambah');
        </script>
<?php }}?>
    
  </body>
</html>
