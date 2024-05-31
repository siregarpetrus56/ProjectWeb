<!DOCTYPE html>
<html>
<head>
    <title>Pengaturan Akun</title>
    <style>
        /* Gaya CSS untuk tampilan halaman pengaturan akun */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .account-settings {
            max-width: 800px;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 40px;
            border-radius: 6px;
        }
        
        .account-settings h2 {
            font-size: 24px;
            margin-bottom: 30px;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 30px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group select {
            width: 100%;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }
        
        .form-group button {
            padding: 14px 24px;
            background-color: #ee4d2d;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .form-group button:hover {
            background-color: #f0553d;
        }
    </style>
</head>
<body>
    <div class="account-settings">
        <h2>Pengaturan Akun</h2>
        <form action="coba.php" method=POST>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="Alamat Email" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea id="address" name="address" placeholder="Alamat" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" href="coba.php">Simpan</button>
            </div>
        </form>
    </div>
    <center>
    <div class="beranda">
        <a href="coba.php"><button>Kembali ke Beranda</button></a>
    </div>
    </center>
</body>
</html>
