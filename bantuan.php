<!DOCTYPE html>
<html>
<head>
  <title>Pusat Bantuan Marketplace</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #0084ff;
    }

    .faq-list {
      list-style: none;
      padding: 0;
    }

    .faq-list li {
      margin-bottom: 20px;
    }

    .question {
      font-weight: bold;
      color: #333;
      font-size: 18px;
      margin-bottom: 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f8f8f8;
      border-radius: 4px;
      padding: 15px;
      transition: background-color 0.3s ease;
    }

    .question:hover {
      background-color: #e4e4e4;
    }

    .question::after {
      content: '+';
      font-size: 24px;
      color: #888;
      transition: transform 0.3s ease;
    }

    .question.active::after {
      content: '-';
    }

    .answer {
      display: none;
      color: #666;
      margin-top: 10px;
      padding-left: 15px;
      border-left: 2px solid #0084ff;
    }

    .answer.show {
      display: block;
    }

    .back-to-top {
      text-align: center;
      margin-top: 30px;
    }

    .back-to-top a {
      color: #0084ff;
      text-decoration: none;
      font-size: 16px;
    }
  </style>
  <script>
    // Toggle tampilan jawaban
    function toggleAnswer(id) {
      const answer = document.getElementById(id);
      answer.classList.toggle('show');
      const question = document.getElementById(id + '-question');
      question.classList.toggle('active');
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Pusat Bantuan Marketplace</h1>

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
          <ul>
            <li>Mungkin no hp yang andah gunakan sudah pernah terpakai diaplikasi Kami</li>
            <li>Dan bisa jadi nomor Anda telah terblokir</li>
            <li>Untuk mengetahui nya anda bisa menghubung customer service pada aplikasi kuliner jawara di menu chat</li>
          </ul>
        </div>
      </li>
    </ul>

    <div class="back-to-top">
      <a href="#">Kembali ke atas</a>
    </div>
  </div>
</body>
</html>
