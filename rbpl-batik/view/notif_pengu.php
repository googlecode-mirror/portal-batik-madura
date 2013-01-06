<?php
include "../code/config.php";
session_start();
if(!isset($_SESSION['login'])){
	echo "<script>window.location='../view/Login_pengunjung.php'</script>";
}

if (isset($_POST['penju'])){
	header('location: home_utama_login.php');}
if (isset($_POST['invest'])){
	header('location: tamu.php');}
?>
<html>
<head>
<title>Daftar Pengguna</title>
<meta name="generator"
    content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
    <!-- Bootstrap -->
	<link rel="stylesheet" type="css/text" href="../css/bootstrap.css" />
	<script language="javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="../js/animate.js"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #000099;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style2 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>
<body>
	
	<div class="style3">
	  <div align="center" class="style2">
		<pre class="style3 style1 style1">
	
		SELAMAT DATANG
		-- Komunitas Batik Pamekasan --</pre>
			  <BR><BR>
	  </div>
	</div>

	<div class="container-fluid">
	 <div class="row-fluid">
		<div class="span2">
		  <p><img src="../img/logo_kobatpam.jpg" width="250" height="150"
		  <BR>
		  <address>
		    <strong>Komunitas Batik Pamekasan</strong><br>
					  Jl.Jokotole, Pamekasan <br>
					  Madura, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
		  </address>
					 
					<address>
					<strong>KOBATPAM</strong><br>
					  <a href="mailto:#">kobatpam@gmail.com</a>
					</address>

					 <ul><li>SEJARAH</li>
					  <li>TIPS-TRIK</li>
			        </ul>
					<div>
					<?php
						if(isset($_SESSION['login'])){
							?><form method="post" action="../code/logout.php"><legend>LOG OUT</legend>
								<button class="btn btn-danger" type="submit">Log Out</button>
							</form><?php
						}
					?>
					</div>
		</div>
	
		<div class="span8" style="background-color:#f5f5f5" style="border-style:double">
		<div class="navbar">
 			<div class="navbar-inner">
    			<ul class="nav">
  					<li><a href="home_pengu.php">Profil</a></li>
  					<li class="active"><a href="..">Notifikasi</a></li>
				</ul>
  			</div>
  		</div>
		<pre class="style3 style1">
			<div align="left">
				<table class="table table-striped">
					<tr>
						<td> No </td>
						<td> Tanggal </td>
						<td> Notifikasi </td>
					</tr>
					<?php

					$no=1;
					$id_user = mysql_result(mysql_query("SELECT `id_user` FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'"),0);
					$sql = mysql_query("SELECT * FROM `notif_peng`  WHERE `id_user` = '".$id_user."'" );
					//$sql = mysql_query("SELECT * FROM notif_peng, pengguna WHERE pengguna.Id_login_peng = '$_SESSION['login']' AND pengguna.id_user = notif_peng.id_user") ;
					
					while ($data = mysql_fetch_array($sql)){ 

						?><tr>
							<td> <?php echo $no; ?> </td>
							<td> <?php echo $data['tgl_2']; ?> </td>
							<td> <?php echo $data['isi_notif_2']; ?> </td>

							
						</tr>
					<?php
					$no+1; 
					}
					?>
				</table>
			</div>
		</pre>
		</div>	
	</div>
</div>

</body>
</html>