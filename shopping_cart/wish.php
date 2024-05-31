<?php
if (isset($_GET['kode_produk']) && isset($_GET['jumlah'])) {

    $kode_produk=$_GET['kode_produk'];
    $jumlah=$_GET['jumlah'];

    include 'database.php';

    $sql= "select * from produk where kode_produk='$kode_produk'";

    $query = mysqli_query($kon,$sql);
    $data = mysqli_fetch_array($query);
    $kode_produk=$data['kode_produk'];
    $nama_produk=$data['nama'];
    $harga=$data['harga'];
    $stok=$data['stok'];

}else {
    $kode_produk="";
    $jumlah=0;
}

if (isset($_GET['aksi'])) {
    $aksi=$_GET['aksi'];
}else {
    $aksi="";
}


switch($aksi){	
    //Fungsi untuk menambah penyewaan kedalam cart
    case "tambah_produk":
    $itemArray = array($kode_produk=>array('kode_produk'=>$kode_produk,'nama_produk'=>$nama_produk,'jumlah'=>$jumlah,'harga'=>$harga,'stok'=>$stok));
    if(!empty($_SESSION["wish"])) {
        if(in_array($data['kode_produk'],array_keys($_SESSION["wish"]))) {
            foreach($_SESSION["wish"] as $k => $v) {
                if($data['kode_produk'] == $k) {
                    $_SESSION["wish"] = array_merge($_SESSION["wish"],$itemArray);
                }
            }
        } else {
            $_SESSION["wish"] = array_merge($_SESSION["wish"],$itemArray);
        }
    } else {
        $_SESSION["wish"] = $itemArray;
    }
    break;
    //Fungsi untuk menghapus item dalam cart
    case "hapus":

        if(!empty($_SESSION["wish"])) {
            foreach($_SESSION["wish"] as $k => $v) {
                    if($_GET["kode_produk"] == $k)
                        unset($_SESSION["wish"][$k]);
                    if(empty($_SESSION["wish"]))
                        unset($_SESSION["wish"]);
            }
        }
    break;

    case "update":
        $itemArray = array($kode_produk=>array('kode_produk'=>$kode_produk,'nama_produk'=>$nama_produk,'jumlah'=>$jumlah,'harga'=>$harga));
        if(!empty($_SESSION["wish"])) {
            foreach($_SESSION["wish"] as $k => $v) {
                if($_GET["kode_produk"] == $k)
                $_SESSION["wish"] = array_merge($_SESSION["wish"],$itemArray);
            }
        }
    break;
}
?>

<div class="row">
    <h2  style="margin-bottom:30px;">Keranjang Belanja</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th width="40%">Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=0;
            $sub_total=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["wish"])):
            foreach ($_SESSION["wish"] as $item):
                $no++;
                $sub_total = $item["jumlah"]*$item['harga'];
                $total+=$sub_total;
        ?>
            <input type="hidden" name="kode_produk[]" class="kode_produk" value="<?php echo $item["kode_produk"]; ?>"/>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item["kode_produk"]; ?></td>
                <td><?php echo $item["nama_produk"]; ?></td>
                <td>Rp. <?php echo number_format($item["harga"],0,',','.');?> </td>
                <td>
                    <form method="get">
                        <input type="hidden" name="kode_produk"  value="<?php echo $item['kode_produk']; ?>" class="form-control">
                        <input type="hidden" name="aksi"  value="update" class="form-control">
                        <input type="hidden" name="halaman"  value="wish" class="form-control">
                        <input type="hidden" name="jumlah" value="<?php echo $item["jumlah"]; ?>" id="jumlaha<?php echo $no; ?>" value="" class="form-control">
                    </form>
                    <a href="index.php?halaman=wish&kode_produk=<?php echo $item['kode_produk']; ?>&aksi=hapus" class="btn btn-danger btn-xs" role="button">Delete</a>
                </td>
            </tr>
        <?php 
            endforeach;
            endif;
        ?>
        </tbody>
    </table>
</div>