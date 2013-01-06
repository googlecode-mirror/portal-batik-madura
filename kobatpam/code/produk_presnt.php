<?php
include "config.php";
include "produk_logic.php";
include "../code/login_proxy.php";

$nama_produk = $_POST['nama'];
$harga_produk = $_POST['harga'];
$stok_produk = $_POST['stok'];
$detail_produk = $_POST['detail'];
//$gambar = $_POST['photo_file'];

$f = new produk_logic();
$is_insert = $f->tambah_produk($_POST['nama'],$_POST[harga],$_POST[stok],$_POST[detail]);
	
if($is_insert){
		header('Location: ../view/produk.php');
		exit();
		}else{
		echo "<script>alert('Harap semua diisi dengan benar');window.history.go(-1)</script>";
			}
?>