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
        <form method="post" action="../view/Daftar_pengunjung.php">
						<button class="btn btn-success" type="submit">Daftar</button>
					</form>
		</div>
		<div class="span8" style="background-color:#f5f5f5" style="border-style:double">
		<p>&nbsp;</p>
			<form class="form-horizontal" method="post" action="../code/login_pengu.php">
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
   				<div class="controls">
      				<button type="submit" class="btn" name="Submit">Login</button>
    			</div>
  			</div>
			</form>
		</div>	
	</div>
</div>

</body>
</html>
