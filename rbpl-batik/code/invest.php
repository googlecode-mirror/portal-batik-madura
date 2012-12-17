<?php
include "logincek.php";
?>
<html>
<head>
<title>Kobatpam-Laman Investasi</title>
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
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000099;
}
.style2 {font-weight: bold}
.style3 {color: #CC6600}
-->
</style>
</head>
<body>
<div class="row">
		<div class="style3">
		  <div align="center">
			<div align="left">
			  <div align="center">
			    <pre class="style3 style1 style2 style1">
		SELAMAT DATANG DI
		Komunitas Batik Pamekasan		</pre>
		      </div>
			</div>
		  </div>
		</div>
		
	<div class="container-fluid">
  			<div class="row-fluid">
    			<div class="span2 offset1">
					<p><img src="../img/1.jpg" width="250" height="150"	 		class="img-rounded"></p>
					<address>
					  <strong>Komunitas Batik Pamekasan</strong><br>
					  Jl.   niansa&nbsp;<em>soke</em>pamekasan <br>
					  Pamekasan, 60111<br>
					  <abbr title="Phone">P:</abbr> (031) 5994251
					</address>
					 
					<address>
					<strong>KOBATPAM</strong><br>
					  <a href="mailto:#">kobatpam@gmail.com</a>
					</address>

					<ul>
					  <li>Tentang KOBATPAM</li>
					  <li>Pengrajin</li>
			        </ul>
					<div>
						<form method="post" action="logout.php"><legend>LOG OUT</legend>
						<button class="btn btn-danger" type="submit">Log Out</button>
						</form>
					</div>
			  </div>
   				 <div class="span8">
				 
								<div class="navbar">
 <div class="navbar-inner">
    <ul class="nav">
  <li>
    <a href="tamu.php">Home</a>
	</li>
  <li><a href="list2.php">List Pengrajin</a></li>
  <li class="active"><a href="invest.php">Create Investasi</a></li>
  <li><a href="..php">Notifikasi</a></li>
</ul>
  </div>
</div>
				 
      			<pre class="style3 style1">SILAHKAN ISI DETAIL BERIKUT</pre>
					<font face='Script MT Bold'>
					<center>
					<form name="My Form" method="post" action="lihat_post.php">
					<font face='Gill Sans MT' color='#708090'>
					Nominal investasi : <BR>
					<input type="text" placeholder="Masukkan nominal" name="nominal" maxlength="40"><BR>
					Keterangan investasi : <BR>
					<input type="text" placeholder="Masukkan nama perusahaan" name="ket" maxlength="40"><BR>
					Waktu investasi : <BR>
					<input type="date" name="waktu" value="2012-11-28;">
					<BR>
					File :
					<div>Silahkan upload file yang dibutuhkan: <em>maksimal ukuran 8 Mb </em></div>
					<input type= "file" name="file_attach" />
					<input type= "hidden" name="maksimal ukuran" value="8000000" /> <BR>
					
					
					<button class="btn btn-primary" type="submit">Submit</button>
					<button class="btn" type="reset">Reset</button>
					<BR><BR>
					<font face='Times New Roman' color='#BDB76B'>
					<a href=""> <span class="style3">lihat detail investasi</span>
					</center>
					</form>
			  </div>
		  </div>
				</div>


</body>
</html>