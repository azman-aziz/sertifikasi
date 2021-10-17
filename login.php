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
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
  
    <h5 class=" mb-3 fw-normal">Login Admin</h5>

    <div class="form-floating">
      <input type="text" name="user" class="form-control" id="floatingInput" placeholder="Masukan Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Masukan Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary " name="submit" type="submit">Login</button>
    <p><a href="/sertifikasi/page_anggota_user/login_anggota.php">Masuk Sebagai user</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; <a href="https://linktr.ee/Azzman">Aziz Maulana</a> 2021</p>
  </form>
</main>

</div>

<?php


if( isset($_POST['submit']))
{
    include "./koneksi.php";
            session_start();    
			$user	= $_POST['user'] ;
			$pass	= $_POST['password'] ; 
			$qry	= mysqli_query($db,"SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == true)
			{
				$data_admin				= mysqli_fetch_array($qry);
				$_SESSION['id_admin'] 	= $data_admin['id_admin'];
				$_SESSION['sesi'] 		= $data_admin['nm_admin'];
				
                echo "<script>alert('Anda berhasil Log In');</script>";
                header("Location:/sertifikasi/");
				// echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
		
		
	}
	else
	{
	//   include "login.php";
	}
?>

    
  </body>
</html>
