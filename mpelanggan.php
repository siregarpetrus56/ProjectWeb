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
<h1><center> Master Pelanggan </h1></center>
<br>
<table border="1">
    <tr>
        <th><center>ID Pelanggan</th><center>
        <th><center>Nama Pelanggan </th></center>
        <th><center>Alamat Pelanggan</th></center>
        <th><center>Nomor Telepon Pelanggan</th></center>
    </tr>

    <?php
    include "database.php";

    $no=1;
    $ambildata = mysqli_query($kon,"select * from pelanggan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td><center>$tampil[id_pelanggan]</td></center>
            <td><center>$tampil[nama_pelanggan]</td></center>
            <td><center>$tampil[alamat_pelanggan]</td></center>
            <td><center>$tampil[nomortelp_pelangganr]</td></center>
        <tr>";
    }
    ?>
    </table>
    <button class="add-button" onclick="location.href='tambahpelanggan.php'">Tambah Pelanggan</button>
    <button class="add-button1" onclick="location.href='coba.php'">Beranda</button>
</body>
</html>