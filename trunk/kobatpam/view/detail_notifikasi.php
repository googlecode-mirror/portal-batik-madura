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
		
		  <pre class="style3 style1">DETAIL NOTIFIKASI
					</pre>
					
<pre class="style3 style1"><span class="style4">																									 						
</span>
<?php
		$id_dagang = mysql_result(mysql_query("SELECT id_dagang FROM pengrajin WHERE username = '".$_SESSION['username']."'"),0);
		$sql = mysql_query("SELECT * FROM `notif_ud`  WHERE `id_dagang` = '".$id_dagang."'" );
while ($data = mysql_fetch_array($sql))
{
 $no = $data['id_notif_1'];
 $tanggal = $data['tgl_1'];
 $notifikasi = $data['isi_notif_1'];

}
?>
<?php 

$q1 = "SELECT gmbar_usaha from  pengrajin where username = '$_SESSION[username]' "; 
$result = mysql_query($q1);
while ($data = mysql_fetch_array($result)) {
$loc = $data['gmbar_usaha']; }
?>

 <form action="../code/update_notifikasi.php?id=<?php echo $no;?>" method="post" enctype="multipart/form-data">

<p>	No 		: <?php echo "$no"; ?></p>
<p>	Tanggal 		: <?php echo "$tanggal"; ?></p>
<p>	Notifikasi 	: <?php echo "$notifikasi"; ?></p>

 <button class="btn btn-primary" type="submit" name="submit">Konfirm</button> <button class="btn" type="submit">Cancle</button>
</form>
		</div>
		
	  </div>
	</div>
</body>
</html>