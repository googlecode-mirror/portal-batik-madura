<?php
//include "../code/login_proxy.php";
include "../code/config.php";

$id1 = $_GET['idinv'];
	$sql = "SELECT * FROM pengrajin WHERE id_dagang = '".$id1."'";

$result=mysql_query($sql);
$num=mysql_numrows($result);

$u_nominal=$_POST['inv'];
$u_ket=$_POST['ket'];
$u_tgl=$_POST['tgl'];

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

//echo "<script>alert(".$u_tgl.");</script>";
mysql_query("INSERT INTO `investasi`(`id_inv`, `id_dagang`, `nama_ud`, `jumlah_keb`, `keterangan_inv`, `waktu_inv`, `profil_inv`, `status_inv`) VALUES ('".$inv."','".$idd."','".$nama."','".$u_nominal."','".$u_ket."','".$u_tgl."','".$profil."','0')");
mysql_query("");	

echo "<script>alert('Investasi berhasil di kirim ');window.history.go(1)</script>";
header('Location: ../code/list2.php');
mysql_close();
 ?>