<?php
include '../koneksi.php';
//jika blm login, jika tidak ada session user, maka larikan ke halaman login
if (!isset($_SESSION['user'])) {
  echo "<script>alert('Anda Harus Login!')</script>";
  echo "<script>location='../index.php'</script>";
  exit();
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Kasir Rahza Mart</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="#">Rahza Mart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
	  <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
	  <li class="nav-item">
          <a class="nav-link" href="pelanggan.php">Pelanggan</a>
        </li>
	  <li class="nav-item">
          <a class="nav-link" href="penjualan.php">Penjualan</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="akun.php">Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>