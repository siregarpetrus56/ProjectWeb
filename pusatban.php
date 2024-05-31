<!DOCTYPE html>
<html>
<head>
  <title>KULINER JAWARA</title>
  <link rel="stylesheet" type="text/css" href="pusatban.css">
</head>
<body>
<header class="header">
    <div class="container">
      <nav class="navbar">
        <a href="#" class="navbar-logo">Kuliner</a>
        <a href="#" class="navbar-logo2">Jawara</a>
        <ul class="navbar-menu">
          <li><a href="http://127.0.0.1/kedua/coba.php" class="navbar-link">Beranda</a></li>
          <li><a href="http://127.0.0.1/kedua/shopping_cart/" class="navbar-link">Menu</a></li>
          <li><a href="kontak.php" class="navbar-link">Kontak</a></li>
          <li><a href="#" class="navbar-link">Bantuan</a></li>
          <li><a href="chat.php" class="navbar-link">Chat</a></li>
          <li><a href="pengaturan.php" class="navbar-link">Akun</a></li>
          <li class="dropdown">
            <a href="#" class="navbar-link">Master</a>
            <ul class="dropdown-content">
              <li><a href="http://localhost/kedua/mproduct.php">Product</a></li>
              <li><a href="http://localhost/kedua/mpelanggan.php">Pelanggan</a></li>
              <li><a href="http://localhost/kedua/msupplier.php">Supplier</a></li>
            </ul>
          </li>
          <li><a href="logout.php" class="navbar-link">Log Out</a></li>   
        </ul>
        <a href="http://127.0.0.1/kedua/db_petrus/index.php?halaman=keranjang-belanja" class="navbar-cart">Keranjang</a>
      </nav>
    </div>
  </header>
<br><br><br><br><br><br><br>
<div class="container">
<h1>Pusat Bantuan</h1>
<br>
    <ul class="faq-list">
      <li>
        <div class="question" onclick="toggleAnswer('answer1')" id="answer1-question">
          Bagaimana cara membuat akun?
        </div>
        <div id="answer1" class="answer">
          <p>Untuk membuat akun, ikuti langkah-langkah berikut:</p>
          <ol>
            <li>Kunjungi halaman utama marketplace.</li>
            <li>Klik tombol "Register".</li>
            <li>Isi informasi yang diperlukan, seperti username, email, dan kata sandi.</li>
            <li>Klik tombol "Verifikasi".</li>
            <li>Kemudian masukkan kode verifikasi yang sudah dikirim ke email Anda.</li>
            <li>Lalu kilk tombol "Register" untuk menyelesaikan proses registrasi.</li>
          </ol>
        </div>
      </li>
      <li>
        <div class="question" onclick="toggleAnswer('answer2')" id="answer2-question">
          Bagaimana cara merubah password ?
        </div>
        <div id="answer2" class="answer">
          <p>Untuk merubah password anda, ikuti langkah-langkah berikut:</p>
          <ol>
            <li>Masuk ke menu pengaturan halaman Kuliner Jawara</li>
            <li>Kemudian masuk ke menu akun.</li>
            <li>Baru cari dan klik reset password.</li>
            <li>Setelah itu ubahlah password Anda dengan memasukkan password lama anda baru anda memasukkan password baru Anda.</li>
            <li>Kemudian konfirmasi dan akan muncul password berhasil diubah.</li>
          </ol>
        </div>
      </li>
      <li>
        <div class="question" onclick="toggleAnswer('answer3')" id="answer3-question">
          Apa kebijakan pengembalian barang?
        </div>
        <div id="answer3" class="answer">
          <p>Kebijakan pengembalian barang kami adalah sebagai berikut:</p>
          <ol>
            <li>Anda dapat mengembalikan barang dalam waktu 30 hari setelah tanggal pembelian.</li>
            <li>Barang harus dalam kondisi yang sama seperti saat diterima dan dalam kemasan asli.</li>
            <li>Anda perlu menghubungi layanan pelanggan kami untuk memulai proses pengembalian.</li>
            <li>Setelah barang diterima dan diperiksa, kami akan mengirimkan pengembalian dana ke metode pembayaran yang digunakan saat pembelian.</li>
          </ol>
        </div>
      </li>
      <li>
        <div class="question" onclick="toggleAnswer('answer4')" id="answer4-question">
          <p>Mengapa saya tidak bisa mendaftar akun Kuliner Jawara dengan no. handphone saya?</p>
        </div>
        <div id="answer4" class="answer">
          <p>Ada beberapa kemungkinan penyebabnya adalah sebagai berikut:</p>
          <ol>
            <li>Mungkin no hp yang andah gunakan sudah pernah terpakai diaplikasi Kami</li>
            <li>Dan bisa jadi nomor Anda telah terblokir</li>
            <li>Untuk mengetahui nya anda bisa menghubung customer service pada aplikasi kuliner jawara di menu chat</li>
          </ol>
        </div>
      </li>
    </ul>

    <div class="back-to-top">
      <a href="#">Kembali ke atas</a>
    </div>
  </div>
<script>
    // Toggle tampilan jawaban
    function toggleAnswer(id) {
      const answer = document.getElementById(id);
      answer.classList.toggle('show');
      const question = document.getElementById(id + '-question');
      question.classList.toggle('active');
    }
  </script>
</body>
</html>