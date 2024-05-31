<!DOCTYPE html>
<html>
<head>
  <title>Marketplace</title>
  <style>
    .product {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .product-title {
      font-weight: bold;
    }

    .product-rating {
      display: inline-block;
      font-size: 18px;
      color: #ffca08;
      margin-top: 5px;
    }

    .rating {
      display: inline-block;
      font-size: 18px;
    }

    .rating input {
      display: none;
    }

    .rating label {
      color: #aaa;
      float: right;
      cursor: pointer;
    }

    .rating label:before {
      content: '\2605';
      margin-right: 5px;
    }

    .rating input:checked ~ label,
    .rating input:checked ~ label ~ label {
      color: #ffca08;
    }
  </style>
</head>
<body>
    <h2 class="product-title">Rating untuk Transaksi ini :</h2>
    <div class="product-rating">
      Rating: <span id="product1-rating">0</span>
    </div>
    <br>
    <div class="rating">
      <input type="radio" id="product1-star5" name="product1-rating" value="5" onchange="updateRating('product1', this)">
      <label for="product1-star5"></label>
      <input type="radio" id="product1-star4" name="product1-rating" value="4" onchange="updateRating('product1', this)">
      <label for="product1-star4"></label>
      <input type="radio" id="product1-star3" name="product1-rating" value="3" onchange="updateRating('product1', this)">
      <label for="product1-star3"></label>
      <input type="radio" id="product1-star2" name="product1-rating" value="2" onchange="updateRating('product1', this)">
      <label for="product1-star2"></label>
      <input type="radio" id="product1-star1" name="product1-rating" value="1" onchange="updateRating('product1', this)">
      <label for="product1-star1"></label>
    </div>
  </div>

  <script>
    function updateRating(productId, element) {
      const ratingValue = element.value;
      const ratingElement = document.getElementById(productId + '-rating');
      ratingElement.textContent = ratingValue;

      // Simpan rating ke server atau lakukan operasi lain sesuai kebutuhan Anda
      // Contoh: Mengirim data rating ke endpoint menggunakan Ajax
      const data = {
        product: productId,
        rating: ratingValue
      };

      // Simulasikan pengiriman data rating ke endpoint menggunakan Ajax
      // Ganti URL_ENDPOINT dengan URL yang sesuai
      fetch('URL_ENDPOINT', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(result => {
        // Tanggapan dari server setelah rating disimpan
        console.log(result);
      })
      .catch(error => {
        // Tangani kesalahan jika terjadi
        console.error('Error:', error);
      });
    }
  </script>
</body>
</html>
