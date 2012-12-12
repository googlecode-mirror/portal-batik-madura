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
		<p>&nbsp;</p>
			<form class="form-horizontal" method="post" action="../code/daf_peng_pres.php">
  			<div class="control-group">
  				<label class="control-label" for="inputNama">Nama</label>
    			<div class="controls">
      				<input name ="nama" type="text" placeholder="Nama">
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="inputLogin">Id-Login</label>
   				<div class="controls">
   					<input name ="login" type="text" placeholder="Id-Login">
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="inputPassword">Password</label>
   				<div class="controls">
     				<input name ="password" type="Password" placeholder="Password">
    			</div>
  			</div>
  			<div class="control-group">
   				<label class="control-label" for="inputPassword">Ulang Password</label>
    			<div class="controls">
      				<input name ="ulangpassword" type="Password" placeholder="Password">
    			</div>
  			</div>
 			<div class="control-group">
    			<label class="control-label" for="inputLogin">Telepon</label>
   				<div class="controls">
      				<input name ="telepon" type="text" placeholder="Nomor Telepon/HP">
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="inputLogin">Jenis Kelamin</label>
   				<div class="controls">
      				<select name="jk">
						<option value="1">-Pilih Gender-</option>
  						<option value="L">Laki-Laki</option>
  						<option value="P">Perempuan</option>
					</select>
    			</div>
  			</div>
  			<div class="control-group">
   				<label class="control-label" for="inputPassword">Alamat</label>
    			<div class="controls">
      				<textarea name ="alamat" rows="5"></textarea>
    			</div>
  			</div>
 			<div class="control-group">
    			<label class="control-label" for="inputLogin">E-mail</label>
   				<div class="controls">
      				<input name ="email" type="text" placeholder="E-mail">
    			</div>
  			</div>
  			<div class="control-group">
   				<div class="controls">
      				<button type="submit" class="btn" name="Submit">Daftar</button>
    			</div>
  			</div>
			</form>
		</div>	
	</div>
</div>

</body>
</html>
