<?php
session_start();
?>
<script language="Javascript">
var TRange=null;

function findString () {
 str = document.formsubmit.varcari.value;
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 if (window.find) {

  // CODE FOR BROWSERS THAT SUPPORT window.find

  strFound=self.find(str);
  if (!strFound) {
   strFound=self.find(str,0,1);
   while (self.find(str,0,1)) continue;
  }
 }
 else if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false);
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange();
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
 }
 else if (navigator.appName=="Opera") {
  alert ("Opera browsers not supported, sorry...")
  return;
 }
 if (!strFound) alert ("String '"+str+"' not found!")
 return;
}
</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php?halaman=produk"><strong><span class="glyphicon glyphicon-th-large"></span> Menu</strong></a></li>
          <li><a href="index.php?halaman=keranjang-belanja"><strong><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang Belanja</strong> </a></li>
		   <li><a href="index.php?halaman=faktur"><strong><span class="glyphicon glyphicon-shopping-cart"></span> Faktur</strong> </a></li>
			<li><a href="faktur1.txt"> History Pembelian </a></li>
      <li><a href="http://localhost/kedua/chat.php"> Chat </a></li>
      <li><a href="index.php?halaman=wish"> Wish List </a></li>
      <li><a href="http://localhost/kedua/coba.php"> Beranda </a></li>
      <li><a href="index.php?halaman=tambahkanproduk"> Tambahkan Produk </a></li>
		</ul>
<br>
<form name=formsubmit align=right>
      <input type=text name=varcari>
      <input type=button value='Cari' onclick=findString()>
</form>
      </div>
    </div>
  </div>
</nav>    
<div class="container" style="margin-top:80px;">
<?php 
    if(isset($_GET['halaman'])){
        $halaman = $_GET['halaman'];
        switch ($halaman) {
            case 'produk':
                include "produk.php";
                break;
            case 'keranjang-belanja':
                include "keranjang-belanja.php";
                break;
            case 'wish':
                include "wish.php";
                break;
			case 'faktur':
                include "faktur.php";
                break;
            default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
    }else {
        include "produk.php";
    }
?>
</div>
<br>


