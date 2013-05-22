<?php
include "config.php";
session_start();

$jml = $_POST['jml'];
$tgl = date('Y-m-d');//$_POST['tgl'];//date(‘Y-m-d’);

$sql = mysql_query("SELECT * FROM produk WHERE id_produk='".$_SESSION['id']."'");
while($fet = mysql_fetch_array($sql)){
	$nama = $fet['nama_produk'];
	$harga = $fet['harga_produk'];
	$stok = $fet['stok_produk'];
	$detail = $fet['detail_produk'];
	$gambar = $fet['Gambar'];
}

//id pada tabel membeli
$id_lam4 = mysql_result(mysql_query("SELECT MAX(id_penj) FROM membeli"),0);
if ($id_lam4 == 0){
    $inv3 = 501;
}else{
    $inv3 = $id_lam4+1;
}

//id pada tabel notif_peng
$id_lam1 = mysql_result(mysql_query("SELECT MAX(id_notif_2) FROM notif_peng"),0);
if ($id_lam1 == 0){
    $inv1 = 301;
}else{
    $inv1 = $id_lam1+1;
}

//id pada tabel notif_ud
$id_lam2 = mysql_result(mysql_query("SELECT MAX(id_notif_1) FROM notif_ud"),0);
if ($id_lam2 == 0){
    $inv2 = 401;
}else{
    $inv2 = $id_lam2+1;
}

$id_user = mysql_result(mysql_query("SELECT `id_user` FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'"),0);
$nama_ud = mysql_result(mysql_query("SELECT `nama_usaha` FROM `pengrajin` WHERE `id_dagang`='".$_SESSION['idd']."'"),0);
$nama_user = mysql_result(mysql_query("SELECT `nama_user` FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'"),0);

$totalpembelian = $harga * $jml;

//jumlah produk awal
$stok_akhir = $stok - $jml;

$notif_peng = "Anda telah membeli ".$nama." sebanyak ".$jml." dari ".$nama_ud." dengan total pembelian RP".$totalpembelian;
$notif_ud = "Produk dari perusahaan anda dengan nama ".$nama.", telah dibeli oleh ".$nama_user." sebanyak ".$jml." dengan total pembelian RP".$totalpembelian;

//insert membeli
mysql_query("INSERT INTO `membeli`(`id_penj`, `id_user`, `namabarang`, `Jumlahbarang`, `totalharga`, `tanggal`) VALUES ('".$inv3."','".$id_user."','".$nama."','".$jml."','".$totalpembelian."','".$tgl."')");
//insert notif pengguna
mysql_query("INSERT INTO `notif_peng`(`id_notif_2`, `id_user`, `isi_notif_2`, `tgl_2`, `status_2`) VALUES ('".$inv1."','".$id_user."','".$notif_peng."','".$tgl."','0')");
//mengisi notif ud
mysql_query("INSERT INTO `notif_ud`(`id_notif_1`, `id_dagang`, `isi_notif_1`, `tgl_1`, `status_1`) VALUES ('".$inv2."','".$_SESSION['idd']."','".$notif_ud."','".$tgl."','0')");
//update jumlah stok
mysql_query("UPDATE `produk` SET `stok_produk` = '".$stok_akhir."' WHERE id_produk='".$_SESSION['id']."'");
/*echo "<script>alert('Pembelian telah berhasil, silahkan cek notifikasi anda');window.history.go(1)</script>";*/
header('location: ../view/home_utama_login.php');

?>
