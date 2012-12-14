<?php
include "../code/login_proxy.php";
include "../code/config.php";


$query=" SELECT * FROM pengrajin WHERE username = '$_SESSION[username]'";
$result=mysql_query($query);
//$num=mysql_numrows($result);

$u_nama=$_POST['nama'];
$u_alamat=$_POST['alamat'];
$u_telp=$_POST['telp'];
$u_profil=$_POST['profil'];
$u_gambar=$_FILES['photo_file']['name'];
$u_user=$result['username'];
//$u_user=$_POST['user'];
$u_pass=$_POST['pass'];
$gambar=mysql_result($result,$i,"gmbar_usaha");

if(empty($_FILES["photo_file"]["tmp_name"])){ 
	$save_file_path = "$gambar";
			header('Location: ../view/home_pengrajin_profil.php');
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
 
    $save_dir = "../img/user/$u_user";
	
	if (!file_exists($save_dir)) {
	mkdir($save_dir, 0755, true);
	}
	
	
	//$save_file_path = $save_dir . "/" . basename($_FILES['photo_file']['name']);
	
	$save_file_path = $save_dir . "/" . $u_gambar;
	
	move_uploaded_file($file_path, $save_file_path);
	
}
$query1="UPDATE pengrajin SET nama_usaha = '$u_nama', alamat_usaha='$u_alamat', telp_usaha='$u_telp', profil_usaha='$u_profil', gmbar_usaha='$save_file_path', password='$u_pass' WHERE username = '$_SESSION[username]'  ";

mysql_query($query1);
		header('Location: ../view/home_pengrajin_profil.php');
mysql_close();

 ?>