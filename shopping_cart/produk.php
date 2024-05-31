<H3><CENTER><B><font size=8px color=salmon>MENU
<BR><BR>
<div class="row">
    <?php   
    include 'database.php';
    $sql="select * from produk order by kode_produk desc";
    $hasil=mysqli_query($kon,$sql);
    $jumlah = mysqli_num_rows($hasil);
    if ($jumlah>0){
        while ($data = mysqli_fetch_array($hasil)):
    ?>
        <div class="col-sm-4">
            <div class="thumbnail">
                <a href="#"><img src="gambar/<?php echo $data['gambar'];?>" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <center><h3><?php echo $data['nama'];?></h3>
                    <h4>Rp. <?php echo number_format($data['harga'],2,',','.'); ?> </h4></center>
                    <h4><?php echo $data['keterangan'];?><br>
                    <p><a href="index.php?halaman=keranjang-belanja&kode_produk=<?php echo $data['kode_produk'];?>&aksi=tambah_produk&jumlah=1" class="btn btn-danger btn-block" role="button">Masukan Keranjang</a></p>
                    <p><a style="text-decoration:none" href="index.php?halaman=wish&kode_produk=<?php echo $data['kode_produk'];?>&aksi=tambah_produk&jumlah=1" class="btn btn-info btn-block" role="button">Tambahkan ke Wishlist</a></p>
                </div>
            </div>
        </div>
        <?php 
        endwhile;
    }else {
        echo "<div class='alert alert-warning'> Tidak ada produk pada kategori ini.</div>";
    };
    ?>
</div>