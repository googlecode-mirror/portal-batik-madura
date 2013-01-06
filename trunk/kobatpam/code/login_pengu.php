<?php
include "config.php";

$login = $_POST['login'];
$pass = $_POST['password'];

$sql = mysql_query("SELECT * FROM pengguna WHERE Id_login_peng='".$login."' AND password='".$pass."'");
$hasil = mysql_num_rows($sql);

if ($hasil > 0 ){
	session_start();
	$_SESSION['login'] = $login;
	header('location: ../view/home_pengu.php');
}else{
	echo "<script>alert('Login gagal, silahkan coba lagi ..');window.history.go(-1)</script>";
	header('location: ../view/login_pengu.php');
}

/*echo "<script>alert('Selamat anda sudah berhasil terdaftar, Selamat Datang di KOBATPAM ;) ');window.history.go(1)</script>";*/
/*echo "<script>window.location='../view/daftar_pengunjung_next.php'</script>";*/
?>