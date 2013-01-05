<?php
include "../code/login_proxy.php";
include "../code/config.php";

$id1 = $_GET['id1'];

	$sql = "SELECT * FROM pengrajin WHERE id_dagang = '$id1'";

$result=mysql_query($sql);
$num=mysql_numrows($result);

$u_nominal=$_POST['inv'];
$u_ket=$_POST['ket'];
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
$query1="INPUT investasi SET produk.nama_produk = '$u_nama', produk.harga_produk='$u_harga', produk.stok_produk='$u_stok', produk.detail_produk='$u_detail', produk.Gambar='$save_file_path' WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang =produk.id_dagang AND produk.id_produk = '$id1'";


mysql_query($query1);
		header('Location: ../view/produk.php');
mysql_close();

 ?>