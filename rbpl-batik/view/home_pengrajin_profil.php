<?php
include "../code/login_proxy.php";
include "../code/config.php";
?>
<html>
<head>
<title>Home Pengrajin</title>
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
			  		<li class="active">
					<a>Profil</a>
					</li>
				   <li><a href="produk.php">Produk</a></li>
				  <li><a href="notifikasi.php">Notifikasi</a></li>
				  <li><a href="___.php">Laporan</a></li>
				</ul>
			  </div>
			</div>		   
<pre class="style3 style1"><span class="style4">																									 						<a href="../view/update.php"><button class="btn btn-success" type="submit" > Edit Profil</button></span></a>
</span>
<?php
$sql = mysql_query("SELECT * FROM pengrajin WHERE username = '$_SESSION[username]'");
while ($data = mysql_fetch_array($sql))
{
 $user_nama = $data['nama_usaha'];
 $alamat = $data['alamat_usaha'] ;
 $telpn = $data['telp_usaha'];
  $profil = $data['profil_usaha'];

}
?>
<h2>Selamat Datang	 <?php echo "$user_nama"; ?>!</h2>

<?php 

$q1 = "SELECT gmbar_usaha from  pengrajin where username = '$_SESSION[username]' "; 
$result = mysql_query($q1);
while ($data = mysql_fetch_array($result)) {
$loc = $data['gmbar_usaha']; }
?>

<img src="<?php echo $loc; ?>" width="250" height="150" class="img-rounded" /> 

<p>	Alamat 		: <?php echo "$alamat"; ?></p>
<p>	Telpon 		: <?php echo "$telpn"; ?></p>
<p>	Deskripsi 	: </p>
<center><p>	<?php echo "$profil"; ?></p></center>


		</div>
		
	  </div>
	</div>
</body>
</html>
