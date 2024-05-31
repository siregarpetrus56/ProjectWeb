<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        h3 {
            margin-bottom: 20px;
        }

        form {
            width: 50%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            text-align: left;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
        }

        input[type="text"], input[type="submit"] {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
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
            background-color: #FF8C00;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #FF0000;
        }
    </style>
</head>
<body>

<h3>Tambah Barang</h3>

<form action="" method="post">
    <table>
        <tr>
            <td>ID Produk</td>
            <td><input type="text" name="id_barang"></td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" name="kode_barang"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok_barang"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga_barang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
        </tr>
    </table>
</form>
<button class="add-button" onclick="location.href='mproduct.php'">Kembali</button>
<?php
include "database.php";

if (isset($_POST['proses'])) {
    mysqli_query($kon, "INSERT INTO produk SET
    id_produk = '$_POST[id_barang]',
    kode_produk = '$_POST[kode_barang]',
    nama = '$_POST[nama_barang]',
    stok = '$_POST[stok_barang]',
    harga = '$_POST[harga_barang]'");

    echo "Data barang baru telah tersimpan";
}
?>

</body>
</html>
