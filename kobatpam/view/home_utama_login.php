<?php
session_start();
if(!isset($_SESSION['login'])){
	echo "<script>window.location='../view/Login_pengunjung.php'</script>";
}

if (isset($_POST['back'])){
	header('location: home_pengu.php');}
if (isset($_POST['log'])){
	header('location: ../code/logout.php');}
?>
<html>
<head>
<title>Kobatpam</title>
<meta name="generator"
    content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
    <!-- Bootstrap -->
	<link rel="stylesheet" type="css/text" href="../css/bootstrap.css" />
	<link rel="stylesheet" type="css/text" href="../css/style.css" />
		<script type="text/javascript" src="../js/jquery.js"></script>
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
		-- Komunitas Batik Pamekasan --
		</pre>
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
				<form method="post" action="home_utama_login.php">
					<button name="back" class="btn btn-primary" type="submit">Back</button>
					<button name="log" class="btn btn-danger" type="submit">Log Out</button>
				</form>
			</div>
		</div>
		
		<div class="span8">
			<pre class="style3 style1">
				<table align="center">
				<tr>
				<td>
					<?php
					include "../code/config.php";
					$sql = mysql_query("SELECT * FROM produk");
					while($fet = mysql_fetch_array($sql)){
						$id = $fet['id_produk'];
						$nama = $fet['nama_produk'];
						$harga = $fet['harga_produk'];
						$stok = $fet['stok_produk'];
						$detail = $fet['detail_produk'];
						$gambar = $fet['Gambar'];
						?><table class="table">
							<tr>
								<td>
									<p><?php echo $nama; ?></p>
									<p><?php echo '<img src="'.$gambar.'" width="100"/>' ?></p>
									<p><?php echo "Rp ".$harga; ?></p>
								</td>
								<td valign="middle">
									<?php echo $detail ?>
								</td>
								<td>
									<p><?php echo "sisa stok : ".$stok; ?></p>
									<p>
										<?php echo '<a href="home_beli.php?id='.$id.'"> Beli </a>'; ?>
									</p>
								</td>
							</tr>
						</table>
					<?php
					} 
					?>
				</td>
				</tr>
				</table>																										
			</pre>
		</div>
		
	  </div>
	</div>

</body>
</html>
