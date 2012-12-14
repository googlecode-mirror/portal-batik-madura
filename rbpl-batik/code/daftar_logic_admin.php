<?php
Class daftar_logic_admin{

	function  __construct()  {
    session_start();       
                    }
	
	function tambah_user($nama,$alamat,$telpon,$profil,$username,$pass){

	if(!$nama || !$alamat || !$telpon || !$profil || !$username || !$pass|| empty($_FILES["photo_file"]["tmp_name"])){ 
	return false;
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
 
    $save_dir = "../img/user/$username";
	
	if (!file_exists($save_dir)) {
	mkdir($save_dir, 0755, true);
	}
	
	
	//$save_file_path = $save_dir . "/" . basename($_FILES['photo_file']['name']);
	
	$save_file_path = $save_dir . "/" . $fileName;
	
	move_uploaded_file($file_path, $save_file_path);
	
	mysql_query("INSERT INTO pengrajin (nama_usaha,alamat_usaha,telp_usaha,profil_usaha,username,password, gmbar_usaha) 
	values ('$nama','$alamat','$telpon','$profil','$username', '$pass', '$save_file_path')");}
	return true;}
	
		}
		
?>