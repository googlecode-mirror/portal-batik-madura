<?php
Class produk_logic{
public $lihat;

	function  __construct()  {
    session_start();       
                    }
	
	function tambah_produk($nama,$harga,$stok,$detail){

	if(!$nama||!$harga||!$stok||!$detail||empty($_FILES["photo_file"]["tmp_name"])){ 
	return false;
	}
	else{
		if ($_FILES["photo_file"]["size"] < 8000000 &&
(
	$_FILES["photo_file"]["type"] == "image/gif" ||
	$_FILES["photo_file"]["type"] == "image/jpeg" ||
	$_FILES["photo_file"]["type"] == "image/pjpeg")
)

	// file tersimpan pada temporary location pada server. mendapatkan temp dari file

    $file_path = $_FILES['photo_file']['tmp_name'];
 
    // mengambil user pengrajin yang sudah login

	$sql = mysql_query("SELECT * FROM pengrajin WHERE username = '$_SESSION[username]'");
	while ($data = mysql_fetch_array($sql))
	{
	 $user_nama = $data['id_dagang'];
	}
 	// membuat direktori untuk penyimpanan gambar, dimana nama dari direktori untuk setiap pengrajin sesuai dengan id user tersebut.

	//$fileName = $_FILES['photo_file']['name'];
	
    $save_dir = "../img/produk/$user_nama";
	
	if (!file_exists($save_dir)) {
	mkdir($save_dir, 0755, true);
	}
	
	$save_file_path = $save_dir . "/" . basename($_FILES['photo_file']['name']);
	move_uploaded_file($_FILES['photo_file']['tmp_name'], $save_file_path);
	

	mysql_query("INSERT INTO produk (nama_produk,harga_produk,stok_produk,detail_produk,id_dagang,Gambar) 
	values ('$nama','$harga','$stok','$detail','$user_nama','$save_file_path')");}
	return true;}
//	img/produk/$user_nama/
	
	function lihat_produk($lihat){
	
	$sql = mysql_query("SELECT * FROM pengrajin WHERE username = '$_SESSION[username]'");
	while ($data = mysql_fetch_array($sql))
	{
	 $user_nama = $data['id_dagang'];
	}
	
	$A = mysql_query("SELECT * FROM produk WHERE id_dagang = '$user_nama'");
	while($row = mysql_fetch_array($A))
	  {
	  echo $row['nama_produk'] . "   " . $row['harga_produk'];
	  echo "<br />";
	  }
	  	  	  return $this->lihat;

	}
	
		}
		
?>