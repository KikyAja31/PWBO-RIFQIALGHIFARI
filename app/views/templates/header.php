<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="<?php echo BASEURL; ?>">PWBO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="<?php echo BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
      <a class="nav-link" href="<?php echo BASEURL; ?>/matakuliah">Matkul</a>
      <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
      <a class="nav-link" href="<?php echo BASEURL; ?>/pinjam">Peminjaman Buku</a>
    </div>
  </div>
</nav>