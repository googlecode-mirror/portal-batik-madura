<?php
include "config.php";
include "post.php";
	
$jumlah_keb= $_POST['nominal'];
$keterangan_inv= $_POST['ket'];
$waktu= $_POST['waktu'];

$f = new post();
$is_insert = $f->insert($_POST['nominal'],$_POST['ket'],$_POST[waktu]);
	
	if($is_insert){
		header('Location: ../code/invest.php');
		exit();
		}else{
		echo "<script>alert('Harap semua diisi dengan benar');window.history.go(-1)</script>";
			}
?>