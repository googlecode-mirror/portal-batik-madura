<?php
include "../code/login_proxy.php";
include "../code/config.php";

$id1 = $_GET['id'];

		$id_dagang = mysql_result(mysql_query("SELECT * FROM produk, pengrajin WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang = produk.id_dagang"),0);
		$sql = mysql_query("SELECT * FROM `notif_ud`  WHERE `id_dagang` = '".$id_dagang."' AND 'id_notif_1'= '$id'" );

	//$sql = "SELECT * FROM produk, pengrajin WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang = produk.id_dagang  AND produk.id_produk = '$id1'";

$result=mysql_query($sql);
	
$query1="UPDATE produk, pengrajin SET produk.nama_produk = '$u_nama', produk.harga_produk='$u_harga', produk.stok_produk='$u_stok', produk.detail_produk='$u_detail', produk.Gambar='$save_file_path' WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang =produk.id_dagang AND produk.id_produk = '$id1'";


mysql_query($query1);
		header('Location: ../view/notifikasi.php');
mysql_close();

 ?>