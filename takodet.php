<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <style>
        /* Gaya CSS untuk tampilan detail produk */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .product {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .product-image {
            width: 300px;
            height: 300px;
            margin-right: 20px;
            object-fit: cover;
            border-radius: 6px;
        }
        
        .product-info {
            flex: 1;
        }
        
        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .product-description {
            color: #666;
            margin-bottom: 10px;
        }
        
        .product-price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .product-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .product-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="product">
        <img class="product-image" src="path_to_image.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-title">Nama Produk</div>
            <div class="product-description">Deskripsi Produk yang lebih panjang untuk memberikan informasi tambahan tentang produk.</div>
            <div class="product-price">Harga: $99.99</div>
            <a class="product-button" href="#">Beli Sekarang</a>
        </div>
    </div>
    
    <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
    
</body>
</html>
