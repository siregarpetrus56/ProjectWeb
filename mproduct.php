<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        td:last-child, th:last-child {
            text-align: center;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .add-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button1 {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #FF0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<br>
<h1><center> Master Product </h1></center>
<br>
<table border="1">
    <tr>
        <th><center>ID Produk</th><center>
        <th><center>Kode Produk </th></center>
        <th><center>Nama Produk </th></center>
        <th><center>Stok</th></center>
        <th><center>Harga</th></center>
    </tr>

    <?php
    include "database.php";

    $no=1;
    $ambildata = mysqli_query($kon,"select * from produk");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td><center>$tampil[id_produk]</td></center>
            <td><center>$tampil[kode_produk]</td></center>
            <td><center>$tampil[nama]</td></center>
            <td><center>$tampil[stok]</td></center>
            <td><center>Rp. $tampil[harga]</td></center>
        <tr>";
    }
    ?>
    </table>
    <button class="add-button" onclick="location.href='tambahbarang.php'">Tambah Barang</button>
    <button class="add-button1" onclick="location.href='coba.php'">Beranda</button>
</body>
</html>