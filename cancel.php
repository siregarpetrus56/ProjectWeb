<!DOCTYPE html>
<html>
<head>
  <title>Detail Pesanan</title>
  <style>
    .container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 20px;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.order-info {
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  margin-bottom: 10px;
}

#cancel-btn {
  background-color: #f44336;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

    </style>
</head>
<body>
  <div class="container">
    <h2>Detail Pesanan</h2>
    <div class="order-info">
      <p>Nomor Pesanan: 123456789</p>
      <p>Tanggal Pesanan: 1 Juli 2023</p>
      <p>Total Harga: Rp 500.000</p>
      <button id="cancel-btn">Batalkan Pesanan</button>
    </div>
  </div>

  <script src="scriptt.js"></script>
</body>
</html>
