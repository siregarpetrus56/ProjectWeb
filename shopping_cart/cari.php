<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Pencaharian Produk</h4>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <div class="form-group">
        <label for="sel1">Kata Kunci:</label>
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  required/>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Pilih">
    </div>
    </form>

    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Gambar</th>

            

        </tr>
        </thead>
        <?php

        include "koneksi.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
             $sql="select * from produk where kode_produk like '%".$kata_kunci."%' or nama like '%".$kata_kunci."%' order by kode_produk asc";


        }else {
             $sql="select * from produk order by kode_produk asc";
        }


        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                 <td><?php echo $no;?></td>
                <td><?php echo $data["kode_produk"]; ?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["stok"];   ?></td>
                <td><?php echo $data["harga"];   ?></td>
                <td><?php echo $data["keterangan"];   ?></td>
                <td><?php echo $data["gambar"];   ?></td>
                
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>

</body>
</html>