<html>
<head>
<title>Menambah Produk</title>
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
					
		<form method="post" action="logout.php"><legend>LOG OUT</legend>

			<button class="btn btn-danger" type="submit">Log Out</button>
		</form>
			</div>
		</div>
		
		<div class="span8">
		  
		 	  
<pre class="style3 style1">MENAMBAHAN PRODUK BARU
					</pre>
					<font face='Script MT Bold'>
					
					<form name="My Form" method="post" action="produk.php">
					<font face='Gill Sans MT' color='#708090'>
					Nama Produk : <BR>
					<input type ="text" placeholder="Masukkan nama produk" name="nama" maxlength="10" size="8"><BR>
					Harga Produk : <BR>
					<input type="text" placeholder="Masukkan harga produk" name="harga" maxlength="40"><BR>
					Stok Produk : <BR>
					<input type="text" placeholder="Masukkan Stok produk" name="stok" maxlength="40"><BR>
					Detail Produk : <BR>
					<textarea name="detail" placeholder="Masukkan detail produk" cols=12  rows=5></textarea>
					<BR>
					Gambar :
<form action="upload.php" method="post" enctype="multipart/form-data">
	<div>Upload your photo: <em>max file size 8000000 bytes</em></div>
	<input type="file" name="photo_file" />
	<input type="submit" name="submit" value="Upload" />
	<input type="hidden" name="max_file_size" value="8000000" />
	<input type="hidden" name="user_id" value="1" />
</form>
<BR>
<BR>
<BR>

					<button class="btn btn-primary" type="submit">Submit</button>
					<button class="btn" type="reset">Reset</button>
					<BR><BR>
					<font face='Times New Roman' color='#BDB76B'>
					<a href="produk.php"> <span class="style3">Lihat Daftar Produk</span>
					
					</form>
		</div>
		
	  </div>
	</div>

</body>
</html>