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
		  
<pre class="style3 style1">MENGAPDATE PRODUK
					</pre>

<?php
$id=$_GET['id'];

$query=" SELECT * FROM produk WHERE id_produk = '$id' ";

$result=mysql_query($query);
$num=mysql_numrows($result);


 $i=0;
while ($i < $num) {
$idp=mysql_result($result,$i,"id_produk");
$nama=mysql_result($result,$i,"nama_produk");
$harga=mysql_result($result,$i,"harga_produk");
$stok=mysql_result($result,$i,"stok_produk");
$detail=mysql_result($result,$i,"detail_produk");
$gambar=mysql_result($result,$i,"Gambar");
++$i;
}
 ?>
 
 <form action="../code/update_produk_presnt.php?id1=<?php echo $id;?>" method="post" enctype="multipart/form-data">
   <table>
 <tr>
<td>Nama Produk :</td>
<td><input type="text" name="nama" size="30" value="<?php echo $nama; ?>"></td>
 </tr>
<tr>
 <td>Harga Produk :</td>
<td><input type="text" name="harga" size="30" value="<?php echo $harga; ?>"></td>
</tr>
<tr>
<td>Stok Produk  :</td>
 <td><input type="text" name="stok" size="30" value="<?php echo $stok; ?>"></td>
</tr>
<tr>
<td>Detail Produk :</td>
<td><textarea name="detail" cols="30"><?php echo $detail; ?></textarea></td>
</tr>
 <tr>
 <td>Gambar :</td>
 <td><img src="<?php echo $gambar; ?>" width="250" height="150" class="img-rounded" /> <br>
 <span class="style9">Upload your photo: <br><em>max file size 8000000 bytes</em> </span>
 <input type="file" name="photo_file" accept="image/*" />
 <input type="hidden" name="max_file_size" value="8000000" /></td>
 </tr>
 </table>
  
   <p>
 <BR><BR>
 <button class="btn btn-primary" type="submit" name="submit">Update</button>
   <button class="btn" type="submit">Cancle</button>
</form>
</body>
</html>

<br>


</pre>

		</div>
		
	  </div>
	</div>

</body>
</html>
