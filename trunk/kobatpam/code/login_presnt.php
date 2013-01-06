<?php
include "config.php";
include "auth_logic.php";
	
$usern = $_POST['username'];
$passw = $_POST['pass'];
$f = new auth_logic();
$is_login = $f->login($_POST['username'],$_POST['pass']);
	
	if($is_login){
		header('Location: ../view/home_pengrajin_profil.php');
		exit();
		}else{
			echo"<script>alert('gagal login');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=../view/login.php'>";
			}
?>