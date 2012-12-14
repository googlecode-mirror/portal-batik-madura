<?php
include "config.php";
include "../code/daftar_logic_admin.php";


$nama_usaha = $_POST['nama'];
$alamat_usaha = $_POST['alamat'];
$telp_usaha = $_POST['telpon'];
$profil_usaha = $_POST['profil'];
$username = $_POST['username'];
$password = $_POST['pass'];

$f = new daftar_logic_admin();
$is_insert = $f->tambah_user($_POST['nama'],$_POST['alamat'],$_POST[telpon],$_POST['profil'],$_POST['username'],$_POST[pass]);
	
if($is_insert){
		header('Location: ../view/home_pengrajin_profil.php');
		exit();
		}else{
		echo "<script>alert('Harap semua diisi dengan benar');window.history.go(-1)</script>";
			}
?>