<?php
//include "logincek.php";
include "../code/config.php";

if (isset($_POST['back'])){
	header('location: home_pengu.php');}
if (isset($_POST['log'])){
	header('location: ../code/logout.php');}
?>
<html>
<head>
<title>List Pengrajin</title>
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
					<p><img src="../img/logo_kobatpam.JPG" width="250" height="150"	 		class="img-rounded"></p>
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
				<form method="post" action="list2.php">
					<button name="back" class="btn btn-primary" type="submit">Back</button>
					<button name="log" class="btn btn-danger" type="submit">Log Out</button>
				</form>
					</div>
			  </div>
   				 <div class="span8">
				 
								<div class="navbar">
 <div class="navbar-inner">
    <ul class="nav">
  <li>
    <a href="tamu.php">Home</a>
	</li>
  <li class="active"><a href="">List Pengrajin</a></li>
</ul>
  </div>
</div>		 
							
      			<pre class="style3 style1">LIST PENGRAJIN KOBATPAM
				
	<center>
	<?php
	$conn = mysql_connect('localhost','root','') or die ('error connecting to mysql');
	
	mysql_select_db('kobatpam'); 
	
	//create table
	mysql_select_db("kobatpam",$conn);
	$result = mysql_query("SELECT * FROM pengrajin");
	echo "<table border='1'>
	<tr>
	<th BGCOLOR=#f7efde>Nama_Pengrajin</th>
	<th BGCOLOR=#f7efde>Alamat_Usaha</th>
	<th BGCOLOR=#f7efde>Telepon</th>
	<th BGCOLOR=#f7efde>Profil Usaha</th>
	<th BGCOLOR=#f7efde>Foto</th>
	<th BGCOLOR=#f7efde></th>
	</tr>";
	
	while ($row = mysql_fetch_array($result))
	{
	echo "<tr>";
	//echo "<td>" . $row['id_dagang'] . "</td> ";
	//echo "<td>" . $row['id_inv'] . "</td> ";
	echo "<td>" . $row['nama_usaha'] . "</td>";
	echo "<td>" . $row['alamat_usaha'] . "</td>";
	echo "<td>" . $row['telp_usaha'] . "</td>";
	echo "<td>" . $row['profil_usaha'] . "</td>";
	echo "<td>"; 
	echo '<img src="'.$row['gmbar_usaha'].'" width="50"/>';  
	echo "</td>";
	echo "<td>";
     echo '<a href="../view/invest.php?id='.$row['id_dagang'].'"> Invest </a>';
	echo "</td>";
	echo "</tr>";
	}
	echo "</table>";
	mysql_close($conn);
	?>
	</center>					

<div class="pagination">
  <ul>
    <li class="disabled"><a href="list2.php">Prev</a></li>
    <li class="active"><a href="#">1</a></li>
  </ul>
</div>
			 </div>
		  </div>
		</div>
</body>
</html>