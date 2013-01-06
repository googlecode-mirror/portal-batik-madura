<?php
//include "../code/login_proxy.php";
include "../code/config.php";

$id1 = $_GET['idinv'];

	$sql = "SELECT * FROM pengrajin WHERE id_dagang = '$id1'";

$result=mysql_query($sql);
$num=mysql_numrows($result);

$u_nominal=$_POST['inv'];
$u_ket=$_POST['ket'];
$u_tgl=$_POST['tgl'];
$u_file=$_POST['datafile'];
//$u_stok=$_POST['stok'];
//$u_detail=$_POST['detail'];
//$u_gambar=$_FILES['photo_file']['name'];
//$gambar=$result['Gambar'];
/*$i=0;

while ($i < $num) {
$gambar=mysql_result($result,$i,"Gambar");
++$i;
}

if(empty($_FILES["photo_file"]["tmp_name"])){ 
	$save_file_path = "$gambar";
			header('Location: ../view/produk.php');
	}
	else{
if ($_FILES["photo_file"]["size"] < 8000000 &&
(
	$_FILES["photo_file"]["type"] == "image/gif" ||
	$_FILES["photo_file"]["type"] == "image/jpeg" ||
	$_FILES["photo_file"]["type"] == "image/pjpeg")
)

	$fileName = $_FILES['photo_file']['name']; //untuk mendapatkan nama file
	// file tersimpan pada temporary location pada server. mendapatkan temp dari file
 
    $file_path = $_FILES['photo_file']['tmp_name'];
 
    $save_dir = "../img/produk/$u_user";
	
	if (!file_exists($save_dir)) {
	mkdir($save_dir, 0755, true);
	}
	
	//$save_file_path = $save_dir . "/" . basename($_FILES['photo_file']['name']);
	$save_file_path = $save_dir . "/" . $u_gambar;
	move_uploaded_file($file_path, $save_file_path);
}*/
//mysql_query("SELECT * FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'");
$id_lam = mysql_result(mysql_query("SELECT MAX(id_inv) FROM investasi"),0);
	if ($id_lam == 0){
		$id_us = 101;
	}else{
		$id_us = $id_lam+1;
	}
$query1="INSERT investasi SET id_inv = '$id_us', id_dagang = '$idd', jumlah_keb = '$u_nominal', keterangan_inv='$u_ket', waktu_inv='$u_tgl', profil_inv = '', file attachment='$u_file', 
status_inv='0'"; 
//WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang = '$id1'";
mysql_query($query1);
		echo "<script>alert('Selamat anda sudah berhasil terdaftar, Selamat Datang di KOBATPAM  ');window.history.go(1)</script>";
		header('Location: ../view/produk.php');
mysql_close();
 ?>