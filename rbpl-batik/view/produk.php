<?php
include "../code/config.php";
include "../code/login_proxy.php";
?>
<html>
<head>
<title>Produk</title>
<meta name="generator"
    content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
    <!-- Bootstrap -->
	<link rel="stylesheet" type="css/text" href="../css/bootstrap.css" />
	<link rel="stylesheet" type="css/text" href="../css/style.css" />
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
					
		<form method="post" action="../code/logout_presnt.php"><legend>LOG OUT</legend>

			<button class="btn btn-danger" type="submit">Log Out</button>
		</form>
			</div>
		</div>
		
		<div class="span8">
		  
		  	<div class="navbar">
			  <div class="navbar-inner">
				<ul class="nav">
			  		<li ><a href="home_pengrajin_profil.php">Profil</a>
					</li>
				   <li class="active"><a href="produk.php">Produk</a></li>
				  <li><a href="notifikasi.php">Notifikasi</a></li>
				  <li><a href="____.php">Laporan</a></li>
				</ul>
			  </div>
			</div>		  
<pre class="style3 style1"><span class="style4"><strong>DAFTAR PRODUK BATIK</strong>  																		 				<a href="add_produk.php"><button class="btn btn-success" type="submit" >Add Produk</button></span></a>
<center>
	<?php
	$sql = mysql_query("SELECT * FROM produk, pengrajin WHERE pengrajin.username = '$_SESSION[username]' AND pengrajin.id_dagang = produk.id_dagang") ;

	echo "<table border='1' bordercolor = 'white' >
	<tr>
	<th BGCOLOR=#00CC99>ID PRODUK</th>	
	<th BGCOLOR=#00CC99>NAMA PRODUK</th>
	<th BGCOLOR=#00CC99>HARGA PRODUK</th>
	<th BGCOLOR=#00CC99>STOK</th>
	<th BGCOLOR=#00CC99>DETAIL PRODUK</th>
	<th BGCOLOR=#00CC99>GAMBAR</th>
	<th BGCOLOR=#00CC99>KONFIGURASI</th>
	
	</tr>";
	
	while ($data = mysql_fetch_array($sql))
	{
	$id = $data['id_produk'] ;
	 $nama = $data['nama_produk'] ;
	 $harga = $data['harga_produk'];
	  $stok = $data['stok_produk'];
  	  $detail = $data['detail_produk'];
	  $loc = $data['Gambar'];
	  
//	if($_POST['Submit']){  
	  
	echo "<tr>";
	echo "<td>" . $id . "</td>";
	echo "<td>" . $nama . "</td>";
	echo "<td>" . $harga . "</td>";
	echo "<td>" . $stok . "</td>";
	echo "<td>" . $detail . "</td>";
	echo "<td>";
	echo '<img src="'.$loc.'" width="100" />';
	echo "</td>";
	echo "<td>";
	echo '<a href="update_produk.php?id='.$data['id_produk'].'">Update produk</a>';
	echo '<br>'; 			
	echo '<a href="../code/delete_produk.php?id='.$data['id_produk'].'"> Delete produk</a>' ;
	echo "</td>";
	echo "</tr>";
	
	}
	?>
	</center>
		</div>
		
	  </div>
	</div>

</body>
</html>
