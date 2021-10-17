<?php 
session_start();

if(!isset($_SESSION["id_admin"]) && !isset($_SESSION["sesi"]) ){

  echo "<script>alert('Anda Harus Log In');</script>";
  header("Location:/sertifikasi/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-book"></i> Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto"> 
        <a class="btn btn-danger" href="/sertifikasi/logout.php">Log-Out</a>
        
      </div>
    </div>
  </div>
</nav>


<div class="cotainter">
    <div class="row">
        <div class="col-md-2 bg-secondary">
        <nav class="nav flex-column nav-dark ">
        <ul class="nav flex-column">
            <li class="nav-item text-white">
                <a class="nav-link link-light" href="/sertifikasi/">Menu Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-light" href="/sertifikasi/page_anggota/anggota.php">Anggota</a>
            </li>
            </ul>
                    </nav>
        </div>
        