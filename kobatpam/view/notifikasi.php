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
	<script type="text/javascript" src="../js/warning.js"></script>
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
				   <li><a href="produk.php">Produk</a></li>
				  <li class="active"><a href="notifikasi.php">Notifikasi</a></li>
				</ul>
			  </div>
			</div>		  
		<pre class="style3 style1"><span class="style4">
		<strong>Notifikasi</strong>
		<table class="table table-striped">
			<tr>
				<td> No </td>
				<td> Tanggal </td>
				<td> Notifikasi </td>
				<td> Konfigurasi </td>
			</tr>
		<?php

		$id_dagang = mysql_result(mysql_query("SELECT id_dagang FROM pengrajin WHERE username = '".$_SESSION['username']."'"),0);
		$sql = mysql_query("SELECT * FROM `notif_ud`  WHERE `id_dagang` = '".$id_dagang."'" );
		

		while ($data = mysql_fetch_array($sql)){ 
		$no = $data['id_notif_1'];

	echo "<tr>";
	echo "<td>" . $no . "</td>";
	echo "<td>" . $data['tgl_1'] . "</td>";
	echo "<td>" . $data['isi_notif_1'] . "</td>";
	echo "<td>";
	echo '<a href="../view/detail_notifikasi.php?id='.$data['id_notif_1'].'">Detail</a>';
	echo '<br>'; 			
	echo '<a href="../code/delete_notif.php?id='.$data['id_notif_1'].'" onClick="return warning();" > Delete</a>';	
	echo "</td>";
	echo "</tr>"; }
	
			?>
	
									 				
		</span>

		</div>
		
	  </div>
	</div>

</body>
</html>
