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
		 		  
<pre class="style3 style1">MENGAPDATE PROFIL
					</pre>
																									
<table border="1" cellpadding="3" cellspacing="0">

<?php

$query=" SELECT * FROM pengrajin WHERE username = '$_SESSION[username]'";
$result=mysql_query($query);
$num=mysql_numrows($result);
mysql_close();


 $i=0;
while ($i < $num) {
$nama=mysql_result($result,$i,"nama_usaha");
$alamat=mysql_result($result,$i,"alamat_usaha");
$telp=mysql_result($result,$i,"telp_usaha");
$profil=mysql_result($result,$i,"profil_usaha");
 $gambar=mysql_result($result,$i,"gmbar_usaha");
$user=mysql_result($result,$i,"username");
$pass=mysql_result($result,$i,"password");
++$i;
}
 
 ?>
 <form action="../code/update_presnt.php" method="post" enctype="multipart/form-data">
  <table>
 <tr>
<td>Nama Usaha :</td>
<td><input type="text" name="nama" size="30" value="<?php echo $nama; ?>"></td>
 </tr>
<tr>
 <td>Alamat :</td>
<td><input type="text" name="alamat" size="30" value="<?php echo $alamat; ?>"></td>
</tr>
<tr>
<td>Telpon :</td>
 <td><input type="text" name="telp" size="30" value="<?php echo $telp; ?>"></td>
</tr>
<tr>
<td>Profil :</td>
<td><textarea name="profil" cols="30"><?php echo $profil; ?></textarea></td>
</tr>
 <tr>
 <td>Gambar :</td>
 <td><img src="<?php echo $gambar; ?>" width="250" height="150" class="img-rounded" /> <br>
 <span class="style9">Upload your photo: <br><em>max file size 8000000 bytes</em> </span>
 <input type="file" name="photo_file" accept="image/*" />
 <input type="hidden" name="max_file_size" value="8000000" /></td>
 </tr>
 
 <tr>
   <td>Username :</td>
  <td><?php echo $user; ?></td>
   </tr>
   <tr>
   <td>Password :</td>
  <td><input type="password" name="pass" size="30" value="<?php echo $pass; ?>" ></td>
   </tr>
   </table>
  
   <p>
 <BR><BR>
 <button class="btn btn-primary" type="submit" name="submit">Update</button>
   <button class="btn" type="submit">Cancle</button>
</form>
   
<?

</body>
</html>

<br>


</pre>

		</div>
		
	  </div>
	</div>

</body>
</html>
