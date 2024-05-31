<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Marketplace Makanan</title>
  <link rel="stylesheet" type="text/css" href="produk.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <nav class="navbar">
        <a href="#" class="navbar-logo">Kuliner</a>
        <a href="#" class="navbar-logo2">Jawara</a>
        <ul class="navbar-menu">
          <li><a href="coba.php" class="navbar-link">Beranda</a></li>
          <li><a href="#" class="navbar-link">Menu</a></li>
          <li><a href="kontak.php" class="navbar-link">Kontak</a></li>
          <li><a href="pusatban.php" class="navbar-link">Bantuan</a></li>
        </ul>
        <a href="#" class="navbar-cart">Keranjang</a>
      </nav>
    </div>
  </header>
  <main class="main">
    <br><br>
      <h2 class="section-title">Produk Terbaru</h2><br><br>
      <center>
      <div class="product-grid">
        <div class="product-card">
        <?php 
    if(isset($_GET['halaman'])){
        $halaman = $_GET['halaman'];
        switch ($halaman) {
            case 'produk':
                include "produk.php";
                break;
            case 'keranjang-belanja':
                include "keranjang-belanja.php";
                break;
			case 'faktur':
                include "faktur.php";
                break;
            default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
    }else {
        include "produk.php";
    }
?>
      </div>
</center>
</body>
</html>
