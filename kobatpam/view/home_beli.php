<?php
include "../code/config.php";
session_start();
if(!isset($_SESSION['login'])){
	echo "<script>window.location='../view/Login_pengunjung.php'</script>";
}

$sql1 = mysql_query("SELECT * FROM `pengguna` WHERE `Id_login_peng`='".$_SESSION['login']."'");

$id = $_GET['id'];
$_SESSION['id'] = $id;
$sql = mysql_query("SELECT * FROM produk WHERE id_produk='".$id."'");
while($fet = mysql_fetch_array($sql)){
	$nama = $fet['nama_produk'];
	$harga = $fet['harga_produk'];
	$stok = $fet['stok_produk'];
	$detail = $fet['detail_produk'];
	$gambar = $fet['Gambar'];
}

$id_dagang = mysql_result(mysql_query("SELECT `id_dagang` FROM `produk` WHERE `id_produk`='".$id."'"),0);
$_SESSION['idd'] = $id_dagang;

if (isset($_POST['kem'])){
	header('location: home_utama_login.php');}
if (isset($_POST['log'])){
	header('location: ../code/logout.php');}
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
					<form method="post" action="home_beli.php">
						<button name="kem" class="btn btn-primary" type="submit">Back</button>
						<button name="log" class="btn btn-danger" type="submit">Log Out</button>
					</form>
					</div>
		</div>
		<div class="span8" style="background-color:#f5f5f5" style="border-style:double">
			<table>
				<tr>
					<h2> <?php echo $nama; ?></h2>
				</tr>
				<tr>
					<td align="center">
						<?php echo '<img src="'.$gambar.'" width="250"/>' ?>
						</br>
						<h3><?php echo "Rp ".$harga; ?></h3>
					</td>
					<td>
						&nbsp;
						&nbsp;
						&nbsp;
						&nbsp;
					</td>
					<td valign="top">
						<strong><?php echo "sisa stok : ".$stok; ?></strong>
						</br>
						</br>
						<?php echo $detail ?>
					</td>
				</tr>
			</table>
			<div align="right">
			<form action="../code/beli.php" method="post">
				<input type="date" name="tgl" plcaholder="kliktanggal">
				<input type="text" name="jml" placeholder="jumlah">
				<button class="btn btn-primary" type="submit">Beli</button>
			</form>
			</div>
		</div>	
	</div>
</div>

</body>
</html>
