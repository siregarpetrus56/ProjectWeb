<!DOCTYPE html>
<html>
<head>
    <title>Tampilan Best Seller, Promosi, dan Flash Sale</title>
    <style>
        /* Gaya CSS untuk tampilan best seller, promosi, dan flash sale */
        .section {
            margin-bottom: 40px;
        }
        
        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
            text-align: center;
            color: #333;
        }

        .section-title h2 {
            margin-bottom: 100px;
            margin-top: 100px;
        }
        
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        
        .product {
            width: 30%;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 6px;
        }
        
        .product-image {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        
        .product-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .product-price {
            font-size: 14px;
            margin-bottom: 10px;
            color: #333;
        }
        
        .product-button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ee4d2d;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .product-button:hover {
            background-color: #f0553d;
        }
  
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: 'Montserrat', sans-serif;
  }
  
  .container {
    max-width: 2000px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .header {
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 99;
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 20px;
  }
  
  .navbar-logo, .navbar-logo2 {
    font-weight: 700;
    text-decoration: none;
    font-size: 50px;
    color: red;
    font-family: 'Freestyle Script', cursive;
  }
  
  .navbar-logo {
    position: relative;
    bottom: 15px;
  }
  
  .navbar-logo2 {
    position: relative;
    top: 25px;
    right: 50px;
  }
  
  .navbar-menu {
    display: flex;
    list-style: none;
    margin-left: auto;
  }
  
  .navbar-link {
    font-size: 18px;
    font-weight: 500;
    color: #333;
    text-decoration: none;
    margin-right: 30px;
    position: relative;
  }
  
  .navbar-link:hover {
    color: red;
  }
  
  .dropdown {
    position: relative;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown-content li {
    padding: 12px 16px;
  }
  
  .dropdown-content li a {
    color: black;
    text-decoration: none;
  }
  
  .dropdown-content li a:hover {
    color: red;
  }
  
  
  .navbar-cart {
    font-size: 18px;
    font-weight: 500;
    color: white;
    text-decoration: none;
    background-color: red;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.2s ease-in-out;
  }
  
  .navbar-cart:hover {
    background-color: red;
    color: black;
  }
  
  .hero {
    background-image: url("salad.png");
    background-size: cover;
    background-position: center;
    height: 750px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .hero-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    text-align: center;
    text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
    margin-bottom: 20px;
  }
  
  .hero-button {
    font-size: 24px;
    font-weight: 500;
    color: red;
    text-decoration: none;
    background-color: #fff;
    padding: 20px 40px;
    border-radius: 5px;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
  }
  
  .hero-button:hover {
    background-color: red ;
    color: #fff;
  }  
    </style>
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
          <li><a href="pusatban.php" class="navbar-link">Bantuan</a></li>
          <li><a href="chat.php" class="navbar-link">Chat</a></li>
          <li><a href="pengaturan.php" class="navbar-link">Akun</a></li>
          <li><a href="#" class="navbar-link">Promosi</a></li>
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
<br><br><br><br>
    <div class="section">
        <h2 class="section-title">Best Seller</h2>
        <div class="product-list">
            <div class="product">
                <img class="product-image" src="takoyaki.png" alt="Product Image">
                <div class="product-title">Takoyaki</div>
                <div class="product-price">Harga: Rp. 50.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="fried.png" alt="Product Image">
                <div class="product-title">Nasi Goreng</div>
                <div class="product-price">Harga: Rp. 100.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="seblak.png" alt="Product Image">
                <div class="product-title">Seblak</div>
                <div class="product-price">Harga: Rp. 150.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="section-title">Promosi</h2>
        <div class="product-list">
            <div class="product">
                <img class="product-image" src="nasigurih.png" alt="Product Image">
                <div class="product-title">Nasi Gurih Rendang Sapi</div>
                <div class="product-price">Harga: Rp. 75.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="sate.png" alt="Product Image">
                <div class="product-title">Sate Taichan</div>
                <div class="product-price">Harga: Rp. 150.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="baksoaci.png" alt="Product Image">
                <div class="product-title">Bakso Aci</div>
                <div class="product-price">Harga: Rp. 125.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
        </div>
    </div>
    
    <div class="section">
        <h2 class="section-title">Flash Sale</h2>
        <div class="product-list">
            <div class="product">
                <img class="product-image" src="baksoaci.png" alt="Product Image">
                <div class="product-title">Bakso Aci</div>
                <div class="product-price">Harga: Rp. 125.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="seblak.png" alt="Product Image">
                <div class="product-title">Seblak</div>
                <div class="product-price">Harga: Rp. 150.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
            <div class="product">
                <img class="product-image" src="takoyaki.png" alt="Product Image">
                <div class="product-title">Takoyaki</div>
                <div class="product-price">Harga: Rp. 50.000</div>
                <a class="product-button" href="#">Beli Sekarang</a>
            </div>
        </div>
    </div>
</body>
</html>
