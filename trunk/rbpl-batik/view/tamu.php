<?php
include "config.php";
//include "login_proxy.php";

if (isset($_POST['back'])){
	header('location: home_pengu.php');}
if (isset($_POST['log'])){
	header('location: ../code/logout.php');}
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
.style3 {color: #000000}
.style4 {color: #0000CC}
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
					<p><img src="../img/logo_kobatpam.jpg" width="250" height="150"	 		class="img-rounded"></p>
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
				<form method="post" action="tamu.php">
					<button name="back" class="btn btn-primary" type="submit">Back</button>
					<button name="log" class="btn btn-danger" type="submit">Log Out</button>
				</form>
					</div>
			  </div>

			  <div class="span8">
				 
				 <div class="navbar">
  <div class="navbar-inner">
    <ul class="nav">
  <li class="active">
    <a>Home</a>
	</li>
  <li><a href="list2.php">List Pengrajin</a></li>
</ul>
  </div>
</div>

<pre class="style3 style1"><span class="style4">LAMAN INVESTASI</span>
<BR>
<img src="../img/pam.jpg" width="250" height="150" class="img-rounded">  
<br>
<p class="style3"> Investasikan uang anda untuk kemajuan batik nusantara. segala investasi anda akan sangat berharga bagi perkembangan batik pamekasan</p>

</pre>
			  </div>
		  </div>
				</div>


</body>
</html>