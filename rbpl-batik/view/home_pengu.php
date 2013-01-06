<?php
include "../code/config.php";
session_start();
if(!isset($_SESSION['login'])){
	echo "<script>window.location='../view/Login_pengunjung.php'</script>";
}

$sql = mysql_query("SELECT * FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'");
while ($data = mysql_fetch_array($sql))
{
 	$user_nama = $data['nama_user'];
 	$telepon = $data['no_telp']; 
 	$alamat = $data['alamat'];
 	$email = $data['email'];
 	$jk_temp = $data['jk'];
 	if ($jk_temp == "L"){
 		$jk = "Laki-Laki";
 	}else{
		$jk = "Perempuan";
	}
}

if (isset($_POST['penju'])){
	header('location: home_utama.php');}
if (isset($_POST['inves'])){
	header('location: list2.php');}
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
			<h2> Selamat Datang <?php echo $user_nama; ?></h2>
			<div align="left">
				<table>
					<tr>
						<td>Nama</td>
						<td> : <?php echo $user_nama ?> </td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td> : <?php echo $alamat ?> </td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td> : <?php echo $jk ?> </td>
					</tr>
					<tr>
						<td>No. Telepon</td>
						<td> : <?php echo $telepon ?> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td> : <?php echo $email ?> </td>
					</tr>
				</table>
			</br>
			<p>* Untuk Melanjutkan silahkan pilih salah satu menu dengan menekan tombol di bawah ini</p>
			</div>
			<div class="form-actions">
			<form action="home_pengu.php" method="post">
  				<button name="penju" type="submit" class="btn btn-success">Penjualan</button>
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
				&nbsp;
  				<button name="inves" type="button" class="btn btn-success">Investasi</button>
			</form>
			</div>
		</div>	
	</div>
</div>

</body>
</html>
