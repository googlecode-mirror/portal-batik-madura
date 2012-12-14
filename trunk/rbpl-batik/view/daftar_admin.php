<html>
<head><title> Registrasi </title>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #0000CC;
}
.style3 {font-size: 14px}
.style9 {font-family: Georgia, "Times New Roman", Times, serif}
.style10 {color: #0033CC}
-->
</style>
</head>
<meta name="generator"
    content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
    <!-- Bootstrap -->
	<link rel="stylesheet" type="css/text" href="../css/bootstrap.css" />
	<link rel="stylesheet" type="css/text" href="../css/style.css" />

</head>
<body>
	<div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
		<img src="../img/logo_kobatpam.jpg" width="448" height="298"	 		class="img-rounded">
    </div>
    <div class="span10">
      <pre class="style3 style1">SELAMAT DATANG
</pre>
    </div>
  </div>
</div>
<center>
<h2 class="style9 style10">REGISTRASI</h2>
<form  action="../code/daftar_presnt_admin.php" method="post" enctype="multipart/form-data">
<table>

		<tr>
		<td><blockquote>
		  <p><span class="style9">Nama : </span></p>
		  </blockquote></td>
			<td><input name="nama" type="text" class="style9" maxlength="20" placeholder="Masukkan Nama"></td>
		  </tr>
		  
		  <tr>
		<td><blockquote>
		  <p><span class="style9">Alamat : </span></p>
		  </blockquote></td>
			<td><input name="alamat" type="text" class="style9" maxlength="20" placeholder="Masukkan Alamat"></td>
		  </tr>
		  
		  	  <tr>
		<td><blockquote>
		  <p><span class="style9">No Telpon : </span></p>
		  </blockquote></td>
			<td><input name="telpon" type="text" class="style9" maxlength="20" placeholder="Masukkan no telpon"></td>
		  </tr>
		  
		  <tr>
		<td><blockquote>
		  <p><span class="style9">Profil : </span></p>
		  </blockquote></td>
			<td><textarea name ="profil" placeholder="Masukkan detail produk" rows="7"></textarea></td>
		  </tr>
		  
		  	  <tr>
		<td><blockquote>
		  <p><span class="style9">Upload your photo: <br><em>max file size 8000000 bytes</em> </span></p>
		  </blockquote></td>
			<td><input type="file" name="photo_file" />
			<input type="hidden" name="max_file_size" value="8000000" />
			</td>
		  </tr>
		  
			
		<tr>
		<td><blockquote>
		  <p><span class="style9">Masukkan Username : </span></p>
		  </blockquote></td>
		<td><input name="username" type="text" class="style9" maxlength="20" placeholder="Input username"></td>
	  </tr>
		
		<tr>
			<td><blockquote>
			  <p><span class="style9">Masukkan Password : </span></p>
		    </blockquote></td>
			<td><input name="pass" type="password" class="style9" maxlength="32" placeholder="Input password"></td>
		</tr>
		
		<tr>		 	</tr>
</table>

<button class="btn btn-primary" type="submit" name="submit">Submit</button>
<BR><BR><BR>
</form>
</center>
<div class="row">
<div class="style3">
  <div align="center">
    <pre class="style3">KAMI MEMBERIKAN YANG TERBAIK UNTUK ANDA
 -KOBATPAM-</pre>
  </div>
</div>
</body>
</html>