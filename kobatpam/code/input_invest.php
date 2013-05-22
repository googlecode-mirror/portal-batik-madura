<?php
//include "../code/login_proxy.php";
include "../code/config.php";

$id1 = $_GET['idinv'];
$sql = "SELECT * FROM pengrajin WHERE id_dagang = '".$id1."'";

$result=mysql_query($sql);
$num=mysql_numrows($result);

$u_nominal=$_POST['inv'];
$u_ket=$_POST['ket'];
$u_tgl=date('Y-m-d');//$_POST['tgl'];

$i=0;
while ($i < $num) {
//$idd=mysql_result($result,$i,"id_dagang");
$idd=mysql_result($result,$i,"id_dagang");
$nama=mysql_result($result,$i,"nama_usaha");
$alamat=mysql_result($result,$i,"alamat_usaha");
$telp=mysql_result($result,$i,"telp_usaha");
$profil=mysql_result($result,$i,"profil_usaha");
$gambar=mysql_result($result,$i,"gmbar_usaha");
++$i;
}

$id_lam = mysql_result(mysql_query("SELECT MAX(id_inv) FROM investasi"),0);
if ($id_lam == 0){
    $inv = 201;
}else{
    $inv = $id_lam+1;
}

$id_lam1 = mysql_result(mysql_query("SELECT MAX(id_notif_2) FROM notif_peng"),0);
if ($id_lam1 == 0){
    $inv1 = 301;
}else{
    $inv1 = $id_lam1+1;
}

$id_lam2 = mysql_result(mysql_query("SELECT MAX(id_notif_1) FROM notif_ud"),0);
if ($id_lam2 == 0){
    $inv2 = 401;
}else{
    $inv2 = $id_lam2+1;
}

session_start();
$id_user = mysql_result(mysql_query("SELECT `id_user` FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'"),0);
$nama_user = mysql_result(mysql_query("SELECT `nama_user` FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'"),0);

$notif_peng = "Anda telah berhasil menghinvestasikan uang anda sebesar RP".$u_nominal." kepada ".$nama;
$notid_ud = "Perusahaan anda telah mendapatkan invesatasi sebesar RP".$u_nominal." dari ".$nama_user;

//mengisi investasi
mysql_query("INSERT INTO `investasi`(`id_inv`, `id_dagang`, `nama_ud`, `jumlah_keb`, `keterangan_inv`, `waktu_inv`, `profil_inv`, `status_inv`) VALUES ('".$inv."','".$idd."','".$nama."','".$u_nominal."','".$u_ket."','".$u_tgl."','".$profil."','0')");
//mengisi notif pengguna
mysql_query("INSERT INTO `notif_peng`(`id_notif_2`, `id_user`, `isi_notif_2`, `tgl_2`, `status_2`) VALUES ('".$inv1."','".$id_user."','".$notif_peng."','".$u_tgl."','0')");	
//mengisi notif ud
mysql_query("INSERT INTO `notif_ud`(`id_notif_1`, `id_dagang`, `isi_notif_1`, `tgl_1`, `status_1`) VALUES ('".$inv2."','".$idd."','".$notid_ud."','".$u_tgl."','0')");
/*echo "<script>alert('Investasi berhasil di kirim ');window.history.go(1)</script>";*/
header('Location: ../view/list2.php');
mysql_close();
 ?>