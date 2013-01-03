<?php
include "../code/proxy.php";

$query = mysql_query("SELECT * FROM pengguna WHERE Id_login_peng='$_SESSION[login]'");
$hasil = mysql_fetch_array($query);
$nama = $hasil['nama_user'];
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
		</div>
		<div class="span8" style="background-color:#f5f5f5" style="border-style:double">
			<h2> Selamat Datang <?php echo "$nama"; ?></h2>
			
		</div>	
	</div>
</div>

</body>
</html>
