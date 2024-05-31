<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
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

<h3>Tambah Pelanggan</h3>

<form action="" method="post">
    <table>
        <tr>
            <td>ID Pelanggan</td>
            <td><input type="text" name="id_pelanggan"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="nama_pelanggan"></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><input type="text" name="alamat_pelanggan"></td>
        </tr>
        <tr>
            <td>Nomor Telepon Pelanggan</td>
            <td><input type="text" name="nomortelp_pelanggan"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses1" value="Simpan"></td>
        </tr>
    </table>
</form>
<button class="add-button" onclick="location.href='mpelanggan.php'">Kembali</button>
<?php
include "database.php";

if (isset($_POST['proses1'])) {
    mysqli_query($kon, "INSERT INTO pelanggan SET
    id_pelanggan = '$_POST[id_pelanggan]',
    nama_pelanggan = '$_POST[nama_pelanggan]',
    alamat_pelanggan = '$_POST[alamat_pelanggan]',
    nomortelp_pelangganr = '$_POST[nomortelp_pelanggan]'");

    echo "Data barang baru telah tersimpan";
}
?>

</body>
</html>
