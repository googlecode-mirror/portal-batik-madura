<?php
include "config.php";

$nama = $_POST['nama'];
$login = $_POST['login'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

if ((empty($nama))||(empty($login))||(empty($telepon))||(empty($alamat))||(empty($email))){
	echo "<script>alert('Harap diisi semua field yang tersedia ;) ');window.history.go(-1)</script>";
}else{

	$id_lam = mysql_result(mysql_query("SELECT MAX(id_user) FROM pengguna"),0);
	if ($id_lam == 0){
		$id_us = 101;
	}else{
		$id_us = $id_lam+1;
	}
	$login_temp = $_POST['login'];
	if ((empty($login_temp))){
		echo "<script>alert('Harap diisi semua field yang tersedia ;) ');window.history.go(-1)</script>";
	}else{
		$lam = mysql_num_rows(mysql_query("SELECT id_login_peng FROM pengguna WHERE '".$login_temp."'"));
		if ($lam > 1){
			echo "<script>alert('ID sudah dipakai harap diisi dengan ID lain');window.history.go(-1)</script>";
		}else{
			$login = $login_temp;
		}
	}
	$pass1 = $_POST['password'];
	$pass2 = $_POST['ulangpassword'];
	if ((empty($pass1))||(empty($pass2))){
		echo "<script>alert('Harap diisi semua field yang tersedia ;) ');window.history.go(-1)</script>";
	}else{
		if ($pass1 != $pass2){
			echo "<script>alert('Password yang anda masukkan tidak sama, silahkan isi ulang kedua fieldnya');window.history.go(-1)</script>";
		}else{
			$pass = $pass1;
		}
	}
	$jk = $_POST['jk'];
	if ($jk == 1){
		echo "<script>alert('Pilih gender anda ;) ');window.history.go(-1)</script>";
	}else{
		$jk = $jk;
	}
}
mysql_query("INSERT INTO `pengguna`(`id_user`, `nama_user`, `id_login_peng`, `password`, `no_telp`, `jk`, `alamat`, `email`, `status_peng`) VALUES ('".$id_us."','".$nama."','".$login."','".$pass."','".$telepon."','".$jk."','".$alamat."','".$email."','pengguna')");
/*echo "<script>alert('Selamat anda sudah berhasil terdaftar, Selamat Datang di KOBATPAM ;) ');window.history.go(1)</script>";*/
echo "<script>window.location='../view/daftar_pengunjung_next.php'</script>";
?>