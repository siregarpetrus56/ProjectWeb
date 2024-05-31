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
    if(!empty($_SESSION["keranjang_belanja"])) {
        if(in_array($data['kode_produk'],array_keys($_SESSION["keranjang_belanja"]))) {
            foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                if($data['kode_produk'] == $k) {
                    $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
                }
            }
        } else {
            $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
        }
    } else {
        $_SESSION["keranjang_belanja"] = $itemArray;
    }
    break;
    //Fungsi untuk menghapus item dalam cart
    case "hapus":

        if(!empty($_SESSION["keranjang_belanja"])) {
            foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                    if($_GET["kode_produk"] == $k)
                        unset($_SESSION["keranjang_belanja"][$k]);
                    if(empty($_SESSION["keranjang_belanja"]))
                        unset($_SESSION["keranjang_belanja"]);
            }
        }
    break;

    case "update":
        $itemArray = array($kode_produk=>array('kode_produk'=>$kode_produk,'nama_produk'=>$nama_produk,'jumlah'=>$jumlah,'harga'=>$harga));
        if(!empty($_SESSION["keranjang_belanja"])) {
            foreach($_SESSION["keranjang_belanja"] as $k => $v) {
                if($_GET["kode_produk"] == $k)
                $_SESSION["keranjang_belanja"] = array_merge($_SESSION["keranjang_belanja"],$itemArray);
            }
        }
    break;
}
?>

<div class="row">
    <h2  style="margin-bottom:30px;">Bon Faktur</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th width="40%">Nama</th>
            <th>Harga</th>
            <th width="10%">QTY</th>
            <th>Sub Total</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
            $no=0;
            $sub_total=0;
            $total=0;
            $total_berat=0;
            if(!empty($_SESSION["keranjang_belanja"])):
            foreach ($_SESSION["keranjang_belanja"] as $item):
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
                <input type="number" min="1" value="<?php echo $item["jumlah"]; ?>" class="form-control" id="jumlah<?php echo $no; ?>" name="jumlah[]" >
                <script>
                    $("#jumlah<?php echo $no; ?>").bind('change', function () {
                        var jumlah<?php echo $no; ?>=$("#jumlah<?php echo $no; ?>").val();
                        $("#jumlaha<?php echo $no; ?>").val(jumlah<?php echo $no; ?>);
                    });
                    $("#jumlah<?php echo $no; ?>").keydown(function(event) { 
                        return false;
                    });
                    
                </script>
            
                <td>Rp. <?php echo number_format($sub_total,0,',','.');?> </td>
                </td>


            </tr>
        <?php 
            endforeach;
            endif;
        ?>
        </tbody>
    </table>
    <a href="index.php?halaman=faktur&kode_produk=<?php echo $item['kode_produk']; ?>&aksi=hapus" class="btn btn-danger btn-xs" role="button">Pembatalan Pesanan</a>
    <h3>Total Pembayaran Rp. <?php echo number_format($total,0,',','.');?> <br><br>
	</h3>
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
<?php

$namafile="faktur1.txt";
$handelfile = fopen($namafile, 'a+') or die("can't open file");

$tgl=date(" j/M/Y H:i:s");
$waktu = "Faktur Jual :$tgl \n";
fwrite($handelfile ,$waktu);


foreach ($_SESSION["keranjang_belanja"] as $item)
{

 
   $id="Barang  \n";
   fwrite($handelfile ,$id);
   
   $kode = "Kode Barang : " . $item['kode_produk'] . "\n";
   fwrite($handelfile ,$kode);
   
   $nama = "Nama Barang : " . $item['nama_produk'] . "\n";
   fwrite($handelfile ,$nama);
   
   $harga = "Harga Barang : " . $item['harga'] . "\n";
   fwrite($handelfile ,$harga);
   
   $j1 = "Jumlah Barang : " . $item['jumlah'] . "\n";
   fwrite($handelfile ,$j1);
   
   //$Total_1=$data['harga']*$var_jumlah1;
   
   $tot1 = "Total Harga : Rp." . $sub_total . "\n";
   fwrite($handelfile ,$tot1);

  

   $sp="\n";
   fwrite($handelfile ,$sp);
   
 
}
$sp="\n";
fwrite($handelfile ,$sp);

$tot2 = "Total Pembayaran : Rp. " . $total . "\n";
fwrite($handelfile ,$tot2);
$garis="----------------------------------------------------------- \n";
fwrite($handelfile ,$garis);
fclose($handelfile);

     
 ?>   